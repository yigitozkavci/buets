<?php
class Places_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_places($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('places');
			return $query -> result_array();
		}else{
			$query = $this->db->get_where('places', array('id' => $id));
			return $query -> row_array();
		}
	}

	public function add_place($data){
		$this->db->insert('places', $data);
	}

	public function delete_place($id){
		$this->db->where('id', $id);
		$this->db->delete('places');
	}

	public function edit_place($data, $id){
		$this->db->where('id', $id);
		$this->db->update('places', $data);
	}
}
?>