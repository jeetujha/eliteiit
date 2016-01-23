<?php
class Admin_testimonials extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'admin/testimonials';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_testimonials_model');

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

        //all the posts sent by the view
        $search_string = $this->input->post('search_string');        
        $order = $this->input->post('order'); 
        $order_type = $this->input->post('order_type'); 

        //pagination settings
        $config['per_page'] = 100;

        $config['base_url'] = base_url().'admin/testimonials';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 

        //if order type was changed
        if($order_type){
            $filter_session_data['order_type'] = $order_type;
        }
        else{
            //we have something stored in the session? 
            if($this->session->userdata('order_type')){
                $order_type = $this->session->userdata('order_type');    
            }else{
                //if we have nothing inside session, so it's the default "Asc"
                $order_type = 'Asc';    
            }
        }
        //make the data type var avaible to our view
        $data['order_type_selected'] = $order_type;        


        //we must avoid a page reload with the previous session data
        //if any filter post was sent, then it's the first time we load the content
        //in this case we clean the session filter data
        //if any filter post was sent but we are in some page, we must load the session data

        //filtered && || paginated
        if($search_string !== false && $order !== false || $this->uri->segment(3) == true){ 
           
            /*
            The comments here are the same for line 79 until 99

            if post is not null, we store it in session data array
            if is null, we use the session data already stored
            we save order into the the var to load the view with the param already selected       
            */
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

            //save session data into the session
            if(isset($filter_session_data)){
              $this->session->set_userdata($filter_session_data);    
            }
            
            //fetch sql data into arrays
            $data['count_products']= $this->admin_testimonials_model->count_testinomails($search_string, $order);
            $config['total_rows'] = $data['count_products'];

            //fetch sql data into arrays
            if($search_string){
                if($order){
                    $data['manufacturers'] = $this->admin_testimonials_model->get_testimonials($search_string, $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['manufacturers'] = $this->admin_testimonials_model->get_testimonials($search_string, '', $order_type, $config['per_page'],$limit_end);           
                }
            }else{
                if($order){
                    $data['manufacturers'] = $this->admin_testimonials_model->get_testimonials('', $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['manufacturers'] = $this->admin_testimonials_model->get_testimonials('', '', $order_type, $config['per_page'],$limit_end);        
                }
            }

        }else{

            //clean filter data inside section
            $filter_session_data['manufacture_selected'] = null;
            $filter_session_data['search_string_selected'] = null;
            $filter_session_data['order'] = null;
            $filter_session_data['order_type'] = null;
            $this->session->set_userdata($filter_session_data);

            //pre selected options
            $data['search_string_selected'] = '';
            $data['order'] = 'id';

            //fetch sql data into arrays
            $data['count_products']= $this->admin_testimonials_model->count_testinomails();
            $data['manufacturers'] = $this->admin_testimonials_model->get_testimonials('', '', $order_type, $config['per_page'],$limit_end);        
            $config['total_rows'] = $data['count_products'];

        }//!isset($search_string) && !isset($order)
         
        //initializate the panination helper 
        $this->pagination->initialize($config);   

        //load the view
        $data['main_content'] = 'admin/testimonials/list';
         $this->load->view('templates/template', $data);

    }//index

    public function add()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            
            $config['upload_path'] ='public/images/testimonials/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            //$this->upload->initialize($config);
            $this->load->library('form_validation');
        
            //form validation
            $this->form_validation->set_rules('studentName', 'studentName', 'trim|required');
            $studentLogo='image';
            //$this->form_validation->set_rules('studentCourse', 'studentCourse', 'trim|required');
            $this->form_validation->set_rules('studentDescription', 'studentDescription', 'trim|required');
            
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                if (!$this->upload->do_upload($studentLogo)) {
                    $error = array('error' => $this->upload->display_errors('<p>', '</p>'));
                    print_r($error);
                }else {
                    
                    $uploadedImg = $this->upload->data();
                    $data_to_store = array(
                        'student_name' => $this->input->post('studentName'),
                        'student_img_path' => $uploadedImg['client_name'],
                        'description' => $this->input->post('studentDescription')
                    );
                }
                //if the insert has returned true then we show the flash message
                if($this->admin_testimonials_model->store_testimonials($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        //load the view
        $data['main_content'] = 'admin/testimonials/add';
        $this->load->view('templates/template', $data);
    }       

    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {
        //product id 
        $id = $_REQUEST['id'];
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $config['upload_path'] ='public/images/testimonials/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
          //  $config['max_size'] = '100';
           // $config['max_width']  = '1024';
           // $config['max_height']  = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            //$this->upload->initialize($config);
            $this->load->library('form_validation');
        
            //form validation
            $this->form_validation->set_rules('studentName', 'studentName', 'trim|required');
            $studentLogo='image';
            //$this->form_validation->set_rules('studentCourse', 'studentCourse', 'trim|required');
            $this->form_validation->set_rules('studentDescription', 'studentDescription', 'trim|required');
            //form validation
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                if (!$this->upload->do_upload($studentLogo)) {
                   // $error = array('error' => $this->upload->display_errors('<p>', '</p>'));
                   // print_r($error);
                    $data_to_store = array(
                    'student_name' => $this->input->post('studentName'),
                    'student_course' => $this->input->post('studentCourse'),
                    'description' => $this->input->post('studentDescription')
                );
                    
                }else {
                $uploadedImg = $this->upload->data();
                $data_to_store = array(
                    'student_name' => $this->input->post('studentName'),
                    'student_img_path' => $uploadedImg['client_name'],
                    'description' => $this->input->post('studentDescription')
                );
                }
                //if the insert has returned true then we show the flash message
                if($this->admin_testimonials_model->update_testimonials($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/testimonials');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //product data 
        $data['manufacturers'] = $this->admin_testimonials_model->get_testimonial_by_id($id);
        //load the view
        $data['main_content'] = 'admin/testimonials/edit';
        $this->load->view('templates/template', $data);           

    }//update

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
        //product id 
        $id = $_REQUEST['id'];
        $this->admin_testimonials_model->delete_testimonails($id);
        redirect('admin/testimonials');
    }//edit

}