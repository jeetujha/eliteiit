<?php
	class Contact extends CI_Controller {

		public function index()
		{
			$this->load->model('index_model');
			$data['home_client_list'] = $this->index_model->get_index_client_list();
			$this->load->view('front/common/header');
			$this->load->view('front/contact',$data);
			$this->load->view('front/common/footer');
		}
		public function contact_data()
		{
			$data = array(
                'name' => $_POST['dname'],
                'mobile' => $_POST['dmobile'],
                'courcename'=> $_POST['courcename'],
                'message'=>  $_POST['cmessage'],
                'send_data'=> date('Y-m-d')
            );
            if($this->db->insert('contact_info_list', $data)){
            	// echo json_encode(array('response'=>'success'));
            	return $this->output
				            ->set_content_type('application/json')
				            ->set_status_header(200)
				            ->set_output(json_encode(array(
				                    'text' => 'Success',
				                    'type' => 'Contact Submitted Successfully'
				            )));
            }
            else return $this->output
			            ->set_content_type('application/json')
			            ->set_status_header(500)
			            ->set_output(json_encode(array(
			                    'text' => 'Failure',
			                    'type' => 'Error in contact submission'
			            )));
		}
	}
?>