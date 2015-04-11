<?php 
class Admin_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function redirect_nonadmin() {
		if(!$this->session->userdata('username')) {
			redirect('/home');
		}
	}

	public function login($userData){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admins');
		$user = $query->row_array();

		if($user != null){
			$userdataarray = array(
				'userid' => $user['id'],
				'username' => $user['username']
				);
			$this->session->set_userdata($userdataarray);
			return 1;
		}else{
			redirect('admin/login');
			return 0;
		}
	}

}
?>