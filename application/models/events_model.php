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
				unset($event['organizator_id']);
				$event['organizator_name'] = $organizator['name'];

				$query = $this->db->get_where('places', array('id' => $event['place_id']));
				$place = $query -> row_array();
				unset($event['place_id']);
				$event['place_name'] = $place['name'];

				$query = $this->db->get_where('event_tags', array('event_id' => $event['id']));
				$event_tags = $query -> result_array();
				$event['event_tags'] = $event_tags;

				foreach ($event_tags as $event_tag) {
					$query = $this->db->get_where('tags', array('id' => $event_tag['tag_id']));
					unset($event_tag['tag_id']);
					$tag = $query -> row_array();
					$event_tag['tag_name'] = $tag['name'];
				}
			}
			return $events;
		}else{
			$query = $this->db->get_where('events', array('id' => $id));
			$event = $query -> row_array();
			$query = $this->db->get_where('organizators', array('id' => intval($event['organizator_id'])));
			$organizator = $query -> row_array();
			unset($event['organizator_id']);

			$event['organizator_name'] = $organizator['name'];

			$query = $this->db->get_where('places', array('id' => $event['place_id']));
			$place = $query -> row_array();
			unset($event['place_id']);
			$event['place_name'] = $place['name'];

			$query = $this->db->get_where('event_tags', array('event_id' => $event['id']));
			$event_tags = $query -> result_array();
			$event['event_tags'] = $event_tags;

				foreach ($event_tags as $event_tag) {
					$query = $this->db->get_where('tags', array('id' => $event_tag['tag_id']));
					unset($event_tag['tag_id']);
					$tag = $query -> row_array();
					$event_tag['tag_name'] = $tag['name'];
				}

			return $event;
		}
	}

	public function add_event($eventData, $tags){
		$this->db->insert('events', $eventData);
		foreach ($tags as $tag) {
			$tagData['event_id'] = $eventData['id'];
			$tagData['tag_id'] = $tag['id'];
			$this->db->insert('event_tags', $tagData);
		}
	}

	public function delete_event($id){
		$this->db->where('id', $id);
		$this->db->delete('events');
	}

	public function edit_event($eventData, $id){
		$this->db->where('id', $id);
		$this->db->update('events', $eventData);
	}
}
?>