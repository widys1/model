<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userlogin extends CI_Model {

	function cek_userlogin($username="",$password="")
	{
		$query = $this->db->get_where('customer', array('username' => $username, 'password' => $password));
		$query = $query -> result_array();
		return $query;
	}
}