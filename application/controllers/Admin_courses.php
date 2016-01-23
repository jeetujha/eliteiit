<?php

class Admin_courses extends CI_Controller {

    /**
     * name of the folder responsible for the views 
     * which are manipulated by this controller
     * @constant string
     */
//    const VIEW_FOLDER = 'admin/placement';

    /**
     * Responsable for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin_courses_model');
        if (!$this->session->userdata('is_logged_in')) {
            redirect('admin/login');
        }
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */

    public function index()
    {
        $query = $this->db->get('testing_course')->result_array();
        //$this->load->view('admin/courses/view',array('course'=>$query));
        $data['course'] = $query;
        $data['main_content'] = 'admin/courses/view';
        $this->load->view('templates/template', $data);  
    }

    public function add() {

        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $data_to_store = array(
                    'course_name' => $this->input->post('course_name'),
                    'content' => $this->input->post('editor1'),
                );

            $this->db->insert('testing_course', $data_to_store); 
            redirect('/admin/courses', 'refresh');
        }
        $data['main_content'] = 'admin/courses/add';
        $this->load->view('templates/template', $data);         
    }

 
    public function edit() {
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $data_to_upadte = array(
                    'course_name' => $this->input->post('course_name'),
                    'content' => $this->input->post('editor1'),
                );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('testing_course', $data_to_upadte); 
            redirect('/admin/courses', 'refresh');
        }
        else{
                $id = $_REQUEST['id'];
                $query = $this->db->get_where('testing_course',array('id' => $id))->result_array();
                $data['content'] = $query;
                $data['main_content'] = 'admin/courses/edit';
                $this->load->view('templates/template', $data);  
        }
    }

    public function delete()
    {
         $id = $_GET['id'];
         $this->db->delete('testing_course', array('id' => $id)); 
         redirect('/admin/courses', 'refresh');
    }
}