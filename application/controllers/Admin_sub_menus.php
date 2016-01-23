<?php
    class Admin_sub_menus extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('is_logged_in')){
                redirect('admin/login');
            }
        }
    
        public function index()
        {
            $id = $_REQUEST['id'];
            $this->load->model('admin_sub_menus_model');
            $data['batches'] = $this->admin_sub_menus_model->get_sub_menus($id);  
            $data['main_content'] = 'admin/sub_menus/list';
            $this->load->view('templates/template', $data);  

        }

        public function add()
        {
            if ($this->input->server('REQUEST_METHOD') === 'POST')
            {
                $id = $_REQUEST['id'];
                $this->load->model('admin_sub_menus_model');
                $this->form_validation->set_rules('menuname', 'Menu Name', 'trim|required');
                $this->form_validation->set_rules('menuurl', 'Menu Url', 'trim|required');
                $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
                if ($this->form_validation->run())
                {
                    $data_to_store = array(
                        'title' => $this->input->post('menuname'),
                        'url' => $this->input->post('menuurl')
                    );
                    if($this->admin_menu_model->add_menus($data_to_store)){
                        $data['flash_message'] = TRUE; 
                    }
                    else{
                        $data['flash_message'] = FALSE; 
                    }
                }
            } 
            $data['main_content'] = 'admin/menus/add';
            $this->load->view('templates/template', $data);  
        }
        
    /**
    * Update item by his id
    * @return void
    */
    /*public function update()
    {
        $id = $_REQUEST['id'];
        $this->load->model('admin_menu_model');
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->form_validation->set_rules('menuname', 'Menu Name', 'trim|required');
            $this->form_validation->set_rules('menuurl', 'Menu url', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'title' => $this->input->post('menuname'),
                    'url' => $this->input->post('menuurl')
                );
                if($this->admin_menu_model->update_menu($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/menus');
            }
        }
        $data['manufactures'] = $this->admin_menu_model->get_menu_by_id($id);
        $data['main_content'] = 'admin/menus/edit';
        $this->load->view('templates/template', $data); 
    } */

    /**
    * Delete product by his id
    * @return void
    */
    /*public function delete()
    { 
        $this->load->model('admin_menu_model');
        $id = $_REQUEST['id'];
        $this->admin_menu_model->delete_menu($id);
        redirect('admin/menus');
    }*/

}