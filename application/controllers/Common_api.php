<?php
	class Common_api extends CI_Controller{
		public function header()
		{
			$this->load->view('front/common/header');
		}
		public function footer()
		{
			$this->load->view('front/common/footer');
		}
	}

?>