<?php
class Places_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_places($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('places');
			return result_array();
		}else{
			$query = $this->db->get_where('places', 'id' => $id);
			return row_array();
		}
	}
}
?>