<?php ob_start();
class Admin_latest_update_model extends CI_Model 
{
	public function get_latest_news_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('latest_news');
		$this->db->where('id', $id);
		$query = $this->db->get();
        $var = $query->result_array();
		return $query->result_array(); 
    }
    public function get_latest_news()
    {
	    $this->db->select('latest_news.id');
		$this->db->select('latest_news.news');
		$this->db->from('latest_news');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
    public function add_news($data_to_store)
    {
		$insert = $this->db->insert('latest_news', $data_to_store);
	    return $insert;
	}
	public function update_news($id, $data_to_store)
	{
		$this->db->where('id', $id);
		$this->db->update('latest_news', $data_to_store);
	}
	public function delete_news($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('latest_news');
	}
 
}
?>	
