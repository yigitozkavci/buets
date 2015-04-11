<?php
class WebServices extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('organizators_model');
		$this->load->model('places_model');
	}
	public function events($id = FALSE){
		if($id === FALSE){
			echo json_encode($this->events_model->get_events());
		}else{
			echo json_encode($this->events_model->get_events($id));
		}
	}
	public function organizators($id = FALSE){
		if($id === FALSE){
			echo json_encode($this->organizators_model->get_organizators());
		}else{
			echo json_encode($this->organizators_model->get_organizators($id));
		}
	}
	public function places($id = FALSE){
		if($id === FALSE){
			echo json_encode($this->places_model->get_places());
		}else{
			echo json_encode($this->places_model->get_places($id));
		}
	}
	public function tags($id = FALSE){
		if($id === FALSE){
			echo json_encode($this->tags_model->get_tags());
		}else{
			echo json_encode($this->tags_model->get_tags($id));
		}
	}
}