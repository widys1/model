<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {


		function cek_user($username="",$password="")
	{
		$query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
		$query = $query -> result_array();
		return $query;
	}
}