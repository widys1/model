<?php 
 
class M_crud extends CI_Model{

	public function __construct() {
}

	public function getSemua($table){
		return $this->db->get($table)->result();
	}

	public function getN($table, $kolom, $variabel){
		return $this -> db -> where($kolom, $variabel)
		-> get($table)->result();
	}

	public function tambah($table, $data){
		$this->db->insert($table,$data);
	}
	public function hapus($variabel,$kolom,$table){
		$this->db->where($kolom,$variabel)->delete($table);
	}
	public function update($variabel,$kolom,$table,$data){
		$this->db->where($kolom,$variabel);
		$this->db->update($table,$data);
	}
}
	