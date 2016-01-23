<?php
	class Services extends CI_Controller{

		public function index()
		{
			$this->load->model('home/services_model');
			$data['home_client_list'] = $this->services_model->get_client_info_list();
        	$data['home_news_events'] = $this->services_model->get_news_info_events();
        	
			$this->load->view('front/common/header');
			$this->load->view('front/services',$data);
			$this->load->view('front/common/footer');
		}
	}
?>