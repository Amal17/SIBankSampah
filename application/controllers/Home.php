<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){
		session_destroy();
		$this->load->login_template('v_login');
		if(isset($_SESSION['login'])) {
			if ($this->session->userdata('level') == 1){redirect('Anggota');}
	    	else if ($this->session->userdata('level') == 3){redirect('Admin');}
		}
	}

	public function auth(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$result = $this->m_login->auth_user($username, $password);

		if ($result === 1 OR $result === 3){
			// $this->session->set_flashdata('message', 'username dan password tidak sesuai');
			echo "<script>alert('Gagal Login Pastikan Username dan Password anda Benar !!!');</script>";
		} else {
			$userData = array(
		        'user_id' => $result->user_id,
		        'username' => $result->username,
		        'email' => $result->email,
		        'level' => $result->level,
		        'avatar' => $result->avatar,
		        'login' => date("dmYHis")
		    );
		    $this->session->set_userdata($userData);
		    // echo true;
		    redirect();
		}
		// print_r($result);
	} 
}