<?php
	class Cource_model extends CI_Model{
		public function get_cource()
		{
			$q = $this->db->get('testing_course');
			return $q->result_array();
		}
	}
?>