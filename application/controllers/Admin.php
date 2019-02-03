<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('level') == 1){redirect('Anggota');}
	    // else if ($this->session->userdata('level') != 3){redirect('');};
		// if ($this->session->userdata('level') == 1){redirect('Anggota');
		// if(!isset($_SESSION['login'])) {redirect('');}
		// $this->load->model('');
	}

	public function index(){
		$this->load->template('v_dashboard_admin');
	}

}