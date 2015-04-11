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
}
?>