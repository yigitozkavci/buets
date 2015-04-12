<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('tags_model');
		$this->load->model('organizators_model');
	}
	public function index(){
		$events = $this->events_model->get_events();
		if($this->input->post('submit') != NULL){
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$tags = $this->input->post('tags');
			foreach ($events as $event) {
				if($event['date']>$end_date || $event['date']<$start_date){
					continue;
				}else{
					$query =$this->tags_model->get_event_tags();
					$event_tags = $query ->result_array();
					foreach ($tags as $tag) {
						if(!in_array($tag, $event_tags) || !in_array($event, $data['events'])){
							$data['events'][] = $event;
						}
					}
				}
			}	
		}else{
			$data['events'] = $this->events_model->get_events();
		}
		foreach($events as $key => $event){
			$events[$key]['organizator_name'] = $this->organizators_model->get_organizators($event['organizator_id']);
		}
		$data['tags'] = $this->tags_model->get_tags();
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}