<?php
    class Admin_latest_updates extends CI_Controller 
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
            $this->load->model('admin_latest_update_model');
            $data['batches'] = $this->admin_latest_update_model->get_latest_news();  
            $data['main_content'] = 'admin/latest_news/list';
            $this->load->view('templates/template', $data);  

        }

        public function add()
        {
            if ($this->input->server('REQUEST_METHOD') === 'POST')
            {
                $this->load->model('admin_latest_update_model');
                $this->form_validation->set_rules('newsName', 'New News', 'trim|required');
                $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
                if ($this->form_validation->run())
                {
                    $data_to_store = array(
                        'news' => $this->input->post('newsName'),
                    );
                    if($this->admin_latest_update_model->add_news($data_to_store)){
                        $data['flash_message'] = TRUE; 
                    }
                    else{
                        $data['flash_message'] = FALSE; 
                    }
                }
            }
                    

            $data['main_content'] = 'admin/latest_news/add';
            $this->load->view('templates/template', $data);  
        }   

    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {
        $id = $_REQUEST['id'];
        $this->load->model('admin_latest_update_model');
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->form_validation->set_rules('newsName', 'New News', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'news' => $this->input->post('newsName'),
                );
                if($this->admin_latest_update_model->update_news($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/latest_updates');
            }
        }
        $data['manufactures'] = $this->admin_latest_update_model->get_latest_news_by_id($id);
        $data['main_content'] = 'admin/latest_news/edit';
        $this->load->view('templates/template', $data); 
    }

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    { 
        $this->load->model('admin_latest_update_model');
        $id = $_REQUEST['id'];
        $this->admin_latest_update_model->delete_news($id);
        redirect('admin/latest_updates');
    }

}