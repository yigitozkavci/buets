<?php
class WebServices extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function events($id = FALSE){
		if($id === FALSE){
			echo json_encode($this->events_model->get_events());
		}
	}
}