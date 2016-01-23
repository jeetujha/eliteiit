<?php
	class Whychooseus extends CI_Controller {

		public function index()
		{
			$this->load->model('home/menu/whychooseus_model');
			$data['query'] = $this->whychooseus_model->get_whychooseus_data();
			$this->load->view('front/common/header');
			$this->load->view('front/whychooseus',$data);
			$this->load->view('front/common/footer');
		}
	}
?>