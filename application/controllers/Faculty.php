<?php
	class Faculty extends CI_Controller {

		public function index()
		{
			$this->load->model('home/faculties_model');

			$data['faculty_list'] = $this->faculties_model->get_faculty();
        	$data['home_client_list'] = $this->faculties_model->get_client_info_list();
        	$data['home_news_events'] = $this->faculties_model->get_news_info_events();
			$this->load->view('front/common/header');
			$this->load->view('front/faculty',$data);
			$this->load->view('front/common/footer');
		}
	}
?>