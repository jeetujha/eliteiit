<?php
class Admin_faculties extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'admin/faculties';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_faculties_model');

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

        $search_string = $this->input->post('search_string');        
        $order = $this->input->post('order'); 
        $order_type = $this->input->post('order_type');
        $config['per_page'] = 100;
        $config['base_url'] = base_url().'admin/faculties';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 30;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $page = $this->uri->segment(3);
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        }
        if($order_type){
            $filter_session_data['order_type'] = $order_type;
        }
        else{
            if($this->session->userdata('order_type')){
                $order_type = $this->session->userdata('order_type');    
            }else{
                $order_type = 'Asc';    
            }
        }
        $data['order_type_selected'] = $order_type;
        if($search_string !== false && $order !== false || $this->uri->segment(3) == true){ 
            if($search_string){
                $filter_session_data['search_string_selected'] = $search_string;
            }else{
                $search_string = $this->session->userdata('search_string_selected');
            }
            $data['search_string_selected'] = $search_string;

            if($order){
                $filter_session_data['order'] = $order;
            }
            else{
                $order = $this->session->userdata('order');
            }
            $data['order'] = $order;
            if(isset($filter_session_data)){
              $this->session->set_userdata($filter_session_data);    
            }
            
            //fetch sql data into arrays
            $data['count_products']= $this->admin_faculties_model->count_faculties($search_string, $order);
            $config['total_rows'] = $data['count_products'];
            if($search_string){
                if($order){
                    $data['manufacturers'] = $this->admin_faculties_model->get_faculties($search_string, $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['manufacturers'] = $this->admin_faculties_model->get_faculties($search_string, '', $order_type, $config['per_page'],$limit_end);           
                }
            }else{
                if($order){
                    $data['manufacturers'] = $this->admin_faculties_model->get_faculties('', $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['manufacturers'] = $this->admin_faculties_model->get_faculties('', '', $order_type, $config['per_page'],$limit_end);        
                }
            }

        }else{

            //clean filter data inside section
            $filter_session_data['manufacture_selected'] = null;
            $filter_session_data['search_string_selected'] = null;
            $filter_session_data['order'] = null;
            $filter_session_data['order_type'] = null;
            $this->session->set_userdata($filter_session_data);
            $data['search_string_selected'] = '';
            $data['order'] = 'id';
            $data['count_products']= $this->admin_faculties_model->count_faculties();
            $data['manufacturers'] = $this->admin_faculties_model->get_faculties('', '', $order_type, $config['per_page'],$limit_end);        
            $config['total_rows'] = $data['count_products'];

        }
        $this->pagination->initialize($config);
        $data['main_content'] = 'admin/faculties/list';
         $this->load->view('templates/template', $data);

    }

    public function add()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $config['upload_path'] ='public/images/faculties/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('form_validation');
             $this->form_validation->set_rules('facultyName', 'facultyName', 'trim|required');
             $facultyLogo='image';
             $this->form_validation->set_rules('facultyQualification', 'facultyQualification', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            if ($this->form_validation->run())
            {
                if (!$this->upload->do_upload($facultyLogo)) {
                    $error = array('error' => $this->upload->display_errors('<p>', '</p>'));
                    print_r($error);
                }else {
                    $uploadedImg = $this->upload->data();
                    $data_to_store = array(
                        'faculty_name' => $this->input->post('facultyName'),
                        'faculty_image_path' => $uploadedImg['client_name'],
                        'faculty_qualification' => $this->input->post('facultyQualification')
                    );
                }
                if($this->admin_faculties_model->store_faculty($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }
            }
        }
        $data['main_content'] = 'admin/faculties/add';
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
            $config['upload_path'] ='public/images/faculties/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('form_validation');
             $this->form_validation->set_rules('facultyName', 'facultyName', 'trim|required');
             $facultyLogo='image';
             $this->form_validation->set_rules('facultyQualification', 'facultyQualification', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            if ($this->form_validation->run())
            {
               if (!$this->upload->do_upload($facultyLogo)) {
                   $data_to_store = array(
                        'faculty_name' => $this->input->post('facultyName'),
                        'faculty_qualification' => $this->input->post('facultyQualification')
                    );
                }else {
                    
                    $uploadedImg = $this->upload->data();
                    $data_to_store = array(
                        'faculty_name' => $this->input->post('facultyName'),
                        'faculty_image_path' => $uploadedImg['client_name'],
                        'faculty_qualification' => $this->input->post('facultyQualification'),
                        'faculty_subject_hand' => $this->input->post('facultyHandleSubject')
                    );
                }
                if($this->admin_faculties_model->update_faculty($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/faculties');
            }
        }
       $data['manufacturers'] = $this->admin_faculties_model->get_faculty_by_id($id);
       print_r( $data['manufacturers']);
        $data['main_content'] = 'admin/faculties/edit';
        $this->load->view('templates/template', $data); 
    }

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
         $id = $_REQUEST['id'];
        $this->admin_faculties_model->delete_faculty($id);
        redirect('admin/faculties');
    }

}