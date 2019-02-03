<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	public $table = 'tb_user';

	public function auth_user($username, $password)
	{

		$this->db->where('username', $username);

		$result = $this->db->get($this->table)->row();

		// Jika user tidak dikembalikan, return 1
		if (!$result) return 1;

		// Jika password salah, return 3
		$hash = $result->password;
		if (md5($password) != $hash) return 3;

		// Return Data User jika Username dan Pass sesuai
		return $result;
	}

}