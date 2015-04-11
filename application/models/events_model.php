<?php 
class Events_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_events($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('events');
			$events = $query -> result_array();
			foreach($events as $event){
				$query = $this->db->get_where('organizators', array('id' => $event['organizator_id']));
				$organizator = $query -> row_array();
				$event['organizator_name'] = $organizator['name'];
				$query = $this->db->get_where('places', array('id' => $event['place_id']));
				$place = $query -> row_array();
				$event['place_name'] = $place['name'];
			}
			return $events;
		}else{
			$query = $this->db->get_where('events', array('id' => $id));
			$event = $query -> row_array();
		}
	}
}
?>