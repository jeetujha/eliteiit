<?php
	class Infrastructure extends CI_Controller{

		public function index()
		{
			$this->load->model('home/menu/infrastructure_model');
			$data['query'] = $this->infrastructure_model->get_infrastrure_data();
			$this->load->view('front/common/header');
			$this->load->view('front/infrastructure',$data);
			$this->load->view('front/common/footer');
		}
	}
?>