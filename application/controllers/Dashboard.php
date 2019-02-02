<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		//melakukan pengalihan halaman sesuai dengan levelnya
	    if ($this->session->userdata('level') == 1){redirect('Anggota');}
	    if ($this->session->userdata('level') != 3){redirect('');}	    
	}

	public function index()
	{
		$this->load->view('admin/header', array('halaman' => 'dashboard'));
		$this->load->view('admin/dashboard');
	}

	public function admin()
	{
		$this->load->view('admin/header', array('halaman' => 'admin'));
		$this->load->view('admin/admin');	
	}

	public function anggota()
	{
		$this->load->view('admin/header', array('halaman' => 'anggota'));
		$this->load->view('admin/anggota');	
	}

	public function bulanan()
	{
		$this->load->view('admin/header', array('halaman' => 'bulanan'));
		$this->load->view('admin/bulanan');	
	}

	public function produk()
	{
		$this->load->view('admin/header', array('halaman' => 'produk'));
		$this->load->view('admin/produk');	
	}

	public function tahunan()
	{
		$this->load->view('admin/header', array('halaman' => 'tahunan'));
		$this->load->view('admin/tahunan');	
	}

	public function transaksi()
	{
		$this->load->view('admin/header', array('halaman' => 'transaksi'));
		$this->load->view('admin/transaksi');	
	}
}
