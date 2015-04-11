<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('tags_model');
	}
	public function index(){
		$data['events'] = $this->events_model->get_events();
		$data['tags'] = $this->tags_model->get_tags();

		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}