<?php
	class Whychooseus_model extends CI_Model {

		public function get_whychooseus_data()
		{
			$this->db->select('content');
			$q = $this->db->get_where('testing_settings',array('menu'=>'Why Choose Us'));
			return $q->result_array();
		}
	}
?>