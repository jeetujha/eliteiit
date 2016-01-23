<?php
class Index_model extends CI_Model {
    public function get_index_batch_list()
    {
        $this->db->select('*');
        $this->db->from('testing_batch_list');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
        
    public function get_index_faculty_list()
    {
        $this->db->select('*');
        $this->db->from('faculty_list');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
        
    public function get_index_testimonial_list()
    {
        $this->db->select('*');
        $this->db->from('testing_testimonials');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
        
    public function get_index_client_list()
    {
        $this->db->select('*');
        $this->db->from('client_list');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
        
    public function get_index_news_events()
    {
        $this->db->select('*');
        $this->db->from('testing_news');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
}