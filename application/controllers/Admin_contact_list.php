<?php
	class Admin_contact_list extends CI_Controller{

		public function index()
		{
			$data['list'] = $this->db->get('contact_info_list')->result_array();
			$data['main_content'] = 'admin/contact_list/list';
        	$this->load->view('templates/template', $data); 
		}
		public function delete()
    	{
        	 $id = $_GET['id'];
         	$this->db->delete('contact_info_list', array('id' => $id)); 
         	redirect('/admin/contcat_list', 'refresh');
    	}
	}
?>