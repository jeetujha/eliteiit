<?php
	class Infrastructure_model extends CI_Model{

		public function get_infrastrure_data()
		{
			$this->db->select('content');
			$q = $this->db->get_where('testing_settings',array('menu'=>'Infrastructure'));
			return $q->result_array();
		}
	}
?>