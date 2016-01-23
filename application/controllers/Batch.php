<?php
	class Batch extends CI_Controller{

		public function index()
		{
			$this->load->model('home/batches_model');
			$data['batches_list'] = $this->batches_model->get_bactches_list();
        	$data['home_client_list'] = $this->batches_model->get_client_info_list();
        	$data['home_news_events'] = $this->batches_model->get_news_info_events();
			$this->load->view('front/common/header');
			$this->load->view('front/batch',$data);
			$this->load->view('front/common/footer');
		}
	}
?>