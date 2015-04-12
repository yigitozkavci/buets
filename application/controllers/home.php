<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('tags_model');
		$this->load->model('organizators_model');
		$this->load->model('places_model');
	}
	public function index(){
		if($this->input->post('submit') != NULL){
			$events = $this->events_model->get_events();

			foreach ($events as $key => $event) {
				date_default_timezone_set('Europe/Istanbul');

				$start_date = new DateTime($this->input->post('start_date'));
				$end_date = new DateTime($this->input->post('end_date'));

				$event_start_date = new DateTime($event['start_date']);
				$event_end_date = new DateTime($event['end_date']);


				$tags = $this->input->post('tags');
				$event_tags = $this->events_model->get_event_tags($event['id']);
				if($start_date != NULL && $end_date != NULL)
					if($start_date < $event_start_date || $start_date > $event_end_date){
						
	
					}
					
				if($tags != NULL){
					$contains = false;
					foreach($tags as $tag){
						if(in_array($tag, $event_tags)){
							$contains = true;
						}
					}
					if(!$contains){
						unset($events[$key]);
					}
				}
				
			}	
		}else{
			$events = $this->events_model->get_events();

		}
		
		foreach($events as $key => $event){
			$events[$key]['organizator'] = $this->organizators_model->get_organizators($event['organizator_id']);
		}
		foreach($events as $key => $event){
			$events[$key]['place'] = $this->places_model->get_places($event['place_id']);
		}
		var_dump("wow");
		$data['events'] = $events;
		$data['tags'] = $this->tags_model->get_tags();
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}