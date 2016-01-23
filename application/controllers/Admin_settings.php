<?php

class Admin_settings extends CI_Controller {

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
        $this->load->model('admin_settings_model');
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
        $query = $this->db->get('testing_settings')->result_array();
        $data['settings'] = $query;
        $data['main_content'] = 'admin/settings/view';
        $this->load->view('templates/template', $data);  
    }
 
    public function edit()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $data_to_upadte = array(
                'content' => $this->input->post('editor1'),
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('testing_settings', $data_to_upadte); 
            redirect('/admin/settings', 'refresh');
        }
        else
        {
            $id = $_REQUEST['id'];
            $query = $this->db->get_where('testing_settings',array('id' => $id))->result_array();
            $data['content'] = $query;
            $data['main_content'] = 'admin/settings/edit';
            $this->load->view('templates/template', $data);  
        }
    }

}