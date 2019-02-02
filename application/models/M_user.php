<?php
  class M_user extends CI_Model {

  	public $tabel = 'tb_user';
  	
    public function cek_login($username, $password)
    {
    	
	    //cari username lalu lakukan validasi
	    $this -> db -> where('username', $username);
		$r = $this->db->get($this->tabel)->row();

		//User tidak ditemukan, return 1
		if(!$r) return 1;


	    //Password salah, return 3
	    if($password != $r->password) return 3;

	    //Jika user dan pass sesuai, return hasil
	    return $r;
    }

  }