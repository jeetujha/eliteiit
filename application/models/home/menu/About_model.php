<?php
	class About_model extends CI_Model{
		public function about_data()
		{
			$this->db->select('content');    
			$query = $this->db->get_where('testing_settings',array('menu'=>'About Us'));
        	return $query->result_array();  
		}
	}

?>