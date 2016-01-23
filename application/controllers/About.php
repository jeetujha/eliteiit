<?php
	class About extends CI_Controller{

		public function index()
		{
			$this->load->model('home/menu/about_model');
			$data['aboutUs'] = $this->about_model->about_data();
			$this->load->view('front/common/header');
			$this->load->view('front/about',$data);
			$this->load->view('front/common/footer');
		}
	}
?>