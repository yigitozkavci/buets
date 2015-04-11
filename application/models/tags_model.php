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
}
?>