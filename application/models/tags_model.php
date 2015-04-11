<?php
class Tags_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_tags($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('tags');
			return result_array();
		}else{
			$query = $this->db->get_where('tags', 'id' => $id);
			return row_array();
		}
	}

	public function add_tag($data){
		$this->db->insert('tags', $data);
	}

	public function delete_tag($id){
		$this->db->where('id', $id);
		$this->db->delete('tags');
	}

	public function edit_tag($data, $id){
		$this->db->where('id', $id);
		$this->db->update('tags', $data);
	}
}
?>