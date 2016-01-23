<?php
	class Cources extends CI_Controller{
		public function index()
		{
			$this->load->model('home/menu/cource_model');
			$data['query'] = $this->cource_model->get_cource();
			$this->load->view('front/common/header');
			$this->load->view('front/cources',$data);
			$this->load->view('front/common/footer');
		}
	}
?>