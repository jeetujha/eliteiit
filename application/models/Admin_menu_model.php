<?php ob_start();
class Admin_menu_model extends CI_Model 
{
	public function get_menu_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('menu_list');
		$this->db->where('id', $id);
		$query = $this->db->get();
        $var = $query->result_array();
		return $query->result_array(); 
    }
    public function get_menus()
    {
	    $this->db->select('menu_list.id');
		$this->db->select('menu_list.title');
		$this->db->select('menu_list.url');
		$this->db->from('menu_list');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
    public function add_menus($data_to_store)
    {
		$insert = $this->db->insert('menu_list', $data_to_store);
	    return $insert;
	}
	public function update_menu($id, $data_to_store)
	{
		$this->db->where('id', $id);
		$this->db->update('menu_list', $data_to_store);
	}
	public function delete_menu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('menu_list');
	}
 
}
?>	
