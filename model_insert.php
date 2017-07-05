<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_insert extends CI_Model {

/*	 function insert () {
		$data = array('fullname' => $this->input->post('fullname',true),
						'username' => $this->input->post('username',true),
						'e_mail' => $this->input->post('e_mail',true),
						'password' => $this->input->post('password',true),
						'jenis_kel' => $this->input->post('gender',true),
						'phone_number' => $this->input->post('phone',true),
						'address' => $this->input->post('address',true));
		$insert = $this->db->insert('customer',$data);
		$hasil = mysql_query($insert);

		if ($hasil) {
			echo '<script language="javascript"> ';
			echo 'alert("message successfully")';
			echo '</script>';
			echo "<meta http-equiv='' content='3; url=/views/done.php' />";
		} else{ echo "Data gagal
			<meta http-equiv='' content='3; url=/views/signup.php' />" ;
		}
		return $insert;
		} */
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
