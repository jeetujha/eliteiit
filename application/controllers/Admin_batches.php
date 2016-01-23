<?php
class Admin_batches extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin_batch_model');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
        $this->load->model('admin_batch_model');
        $data['batches'] = $this->admin_batch_model->get_batches_list();  
        $data['main_content'] = 'admin/batches/list';
        $this->load->view('templates/template', $data);  

    }

    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            $this->form_validation->set_rules('courseName', 'Course Name', 'trim|required');
            $this->form_validation->set_rules('courseDuration', 'Course Duration', 'trim|required');
            $this->form_validation->set_rules('courseDate', 'Course Date', 'trim|required');
            $this->form_validation->set_rules('courseType', 'Course Type', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'course_name' => $this->input->post('courseName'),
                    'course_duration' => $this->input->post('courseDuration'),
                    'course_start_date' => $this->input->post('courseDate'),
                    'course_type' => $this->input->post('courseType')
                );
                if($this->admin_batch_model->store_batches($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }
            }
        }
        $data['main_content'] = 'admin/batches/add';
        $this->load->view('templates/template', $data);  
    }       

    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {
        $id = $_REQUEST['id'];
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->form_validation->set_rules('courseName', 'Course Name', 'trim|required');
            $this->form_validation->set_rules('courseDuration', 'Course Duration', 'trim|required');
            $this->form_validation->set_rules('courseDate', 'Course Date', 'trim|required');
            $this->form_validation->set_rules('courseType', 'Course Type', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'course_name' => $this->input->post('courseName'),
                    'course_duration' => $this->input->post('courseDuration'),
                    'course_start_date' => $this->input->post('courseDate'),
                    'course_type' => $this->input->post('courseType')
                );
                if($this->admin_batch_model->update_batches($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/batches');
            }
        }
        $data['manufactures'] = $this->admin_batch_model->get_batch_by_id($id);
        $data['main_content'] = 'admin/batches/edit';
        $this->load->view('templates/template', $data); 
    }

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
        //product id 
        $id = $_REQUEST['id'];
        $this->admin_batch_model->delete_batches($id);
        redirect('admin/batches');
    }//edit

}