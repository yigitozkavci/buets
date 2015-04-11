<?php
class Organizators_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_organizators($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('organizators');
			return result_array();
		}else{
			$query = $this->db->get_where('organizators', 'id' => $id);
			return row_array();
		}
	}

	public function add_organizator($data){
		$this->db->insert('organizators', $data);
	}

	public function delete_organizator($id){
		$this->db->where('id', $id);
		$this->db->delete('organizators');
	}

	public function edit_organizator($data, $id){
		$this->db->where('id', $id);
		$this->db->update('organizators', $data);
	}
}
?>