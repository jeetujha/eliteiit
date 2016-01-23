<?php
	class Batches_model extends CI_Model{

		public function get_bactches_list()
		{
            $this->db->select('*');
            $this->db->from('testing_batch_list');
            $this->db->order_by("id", "desc");
            $query = $this->db->get();
            return $query->result_array();
        }
        
        public function get_client_info_list()
        {
            $this->db->select('*');
            $this->db->from('client_list');
            $this->db->order_by("id", "desc");
            $query = $this->db->get();
            return $query->result_array();
        }
        
        public function get_news_info_events()
        {
            $this->db->select('*');
            $this->db->from('testing_news');
            $this->db->order_by("id", "desc");
            $query = $this->db->get();
            return $query->result_array();
        }
	}
?>