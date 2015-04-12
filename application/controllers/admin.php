<?php 
class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('organizators_model');
		$this->load->model('places_model');
		$this->load->model('tags_model');
		$this->load->model('admin_model');
	}

	public function index(){
		$data['events'] = $this->events_model->get_events();
		$this->load->view('templates/header');
		$this->load->view('admin/home', $data);
		$this->load->view('templates/footer');
	}
	public function organizators(){
		//$data['organizators'] = $this->organizators_model->get_organizators();
		$this->load->view('templates/header');
		$this->load->view('admin/organizators');
		$this->load->view('templates/footer');
	}
	public function places(){
		$data['places'] = $this->places_model->get_places();
		$this->load->view('templates/header');
		$this->load->view('admin/places', $data);
		$this->load->view('templates/footer');
	}
	public function tags(){
		$data['tags'] = $this->tags_model->get_tags();
		$this->load->view('templates/header');
		$this->load->view('admin/tags', $data);
		$this->load->view('templates/footer');
	}

	public function login(){
		if($this->input->post('login') != NULL){
			$userData['username'] = $this->input->post('username');
			$userData['password'] = md5($this->input->post('password'));

			$this->admin_model->login($userData);
		}else{
			$this->load->view('admin/header');
			$this->load->view('admin/login');
			$this->load->view('admin/footer');
		}
	}

	public function add_event(){
		if($this->input->post('submit_event') != NULL){

			$eventData['name'] = $this->input->post('name');
			$eventData['description'] = $this->input->post('description');
			$eventData['organizator_id'] = $this->input->post('organizator_id');
			$eventData['place_id'] = $this->input->post('place_id');
			$eventData['logo_name'] = $this->input->post('logo_name');
			$eventData['start_date'] = $this->input->post('start_date');
			$eventData['end_date'] = $this->input->post('end_date');
			$eventData['url'] = $this->input->post('url');
			$tags = explode(', ', $this->input->post('tags'));

			$this->events_model->add_event($eventData, $tags);

		}else{
			$this->load->view('admin/add_event');
		}
	}

	public function edit_event($id){
		if($this->input->post('edit_event') != NULL){
			$eventData['name'] = $this->input->post('name');
			$eventData['description'] = $this->input->post('description');
			$eventData['organizator_id'] = $this->input->post('organizator_id');
			$eventData['place_id'] = $this->input->post('place_id');
			$eventData['logo_name'] = $this->input->post('logo_name');
			$eventData['start_date'] = $this->input->post('start_date');
			$eventData['end_date'] = $this->input->post('end_date');
			$eventData['url'] = $this->input->post('url');

			$this->events_model->edit_event($eventData, $id);
		}else{
			$this->load->view('admin/edit_event', $id);
		}
	}

	public function delete_event($id){
		$this->events_model->delete_event($id);
	}

	public function add_organizator(){
		if($this->input->post('submit_organizator') != NULL){
			$organizatorData['name'] = $this->input->post('name');
			$organizatorData['logo_name'] = $this->input->post('logo_name');

			$this->organizators_model->add_organizator($organizatorData);
		}else{
			$this->load->view('admin/add_organizator');
		}
	}

	public function edit_organizator($id){
		if($this->input->post('submit_organizator') != NULL){
			$organizatorData['name'] = $this->input->post('name');
			$organizatorData['logo_name'] = $this->input->post('logo_name');

			$this->organizators_model->edit_organizator($organizatorData, $id);
		}else{
			$this->load->view('admin/edit_organizator', $id);
		}
	}

	public function delete_organizator($id){
		$this->organizators_model->delete_organizator($id);
	}

	public function add_tag(){
		if($this->input->post('submit_tag') != NULL){
			$tagData['name'] = $this->input->post('name');

			$this->tags_model->add_tag($tagData);
		}else{
			$this->load->view('admin/add_tag');
		}
	}

	public function edit_tag($id){
		if($this->input->post('submit_tag') != NULL){
			$tagData['name'] = $this->input->post('name');

			$this->tags_model->edit_tag($tagData, $id);
		}else{
			$this->load->view('admin/edit_tag', $id);
		}
	}

	public function delete_tag($id){
		$this->tags_model->delete_tag($id);
	}
}
?>