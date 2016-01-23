<?php ob_start();
class Admin_batch_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_batch_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('testing_batch_list');
		$this->db->where('id', $id);
		$query = $this->db->get();
                $var = $query->result_array();
		return $query->result_array(); 
    }

    /**
    * Fetch products data from the database
    * possibility to mix search, filter and order
    * @param int $manufacuture_id 
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_batches_list()
    {
	    
		$this->db->select('testing_batch_list.id');
		$this->db->select('testing_batch_list.course_name');
		$this->db->select('testing_batch_list.course_duration');
		$this->db->select('testing_batch_list.course_from_timing');
        $this->db->select('testing_batch_list.course_to_timing');
		$this->db->select('testing_batch_list.course_start_date');
		$this->db->select('testing_batch_list.faculty_name');
		$this->db->select('testing_batch_list.location');
		$this->db->from('testing_batch_list');
		$query = $this->db->get();
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $manufacture_id
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_batches($manufacture_id=null, $search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('testing_batch_list');
		if($manufacture_id != null && $manufacture_id != 0){
			$this->db->where('id', $manufacture_id);
		}
		if($search_string){
			$this->db->like('course_name', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_batches($data)
    {
		$insert = $this->db->insert('testing_batch_list', $data);
	    return $insert;
	}

    /**
    * Update product
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_batches($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('testing_batch_list', $data);
	}

    /**
    * Delete product
    * @param int $id - product id
    * @return boolean
    */
	function delete_batches($id){
		$this->db->where('id', $id);
		$this->db->delete('testing_batch_list'); 
	}
 
}
?>	
