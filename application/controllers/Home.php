<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');

		if ($this -> session -> userdata('logged_in') == TRUE) {
			if ($this->session->userdata('level') == 1){redirect('Anggota');}
	    	else if ($this->session->userdata('level') == 3){redirect('Dashboard');}
		}
	}

	public function login(){
	    $username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$password = md5($password);

	    $this -> load -> model('m_user');

		$r = $this -> m_user -> cek_login($username, $password);
		// echo($username."&".$password."<br>");
		// print_r($r);

		if ($r === 1){
			echo "<script>alert('Gagal Login Pastikan Username dan Password anda Benar !!!');</script>";
		} else if ($r === 3) {
			echo "<script>alert('Gagal Login Pastikan Username dan Password anda Benar !!!');</script>";
		} else {
			$userData = array(
		        'username' => $r->username,
		        'level' => $r->level,
		        'logged_in' => TRUE
      		);
      		$this->session->set_userdata($userData);
		}

		if ($r -> level == 1){
			redirect('Anggota');
		} else if ($r -> level == 3){
			redirect('Dashboard');
		} else {
			redirect('Home');
		}
	}

	public function logout()
	{
		$this -> session -> sess_destroy();
		echo "Berhasil Hapus";
    	redirect('');
	}
}
