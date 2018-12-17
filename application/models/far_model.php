<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class far_model extends CI_Model{
	public function daftarsar($data){
		$this->db->insert('loginsar',$data);
	}

	public function daftardinas($data){
		$this->db->insert('log_dinas',$data);
	}

	public function masuksar($username,$password){
		$query=$this->db->query("SELECT * FROM loginsar WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}
	public function masukdinas($username,$password){
		$query=$this->db->query("SELECT * FROM log_dinas WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	public function getkorban(){
		$korban= $this->db->query('SELECT * FROM data_korban'); 
		return $korban->result_array();
	}
	public function getrelawan(){
		$sar= $this->db->query('SELECT * FROM data_tim'); 
		return $sar->result_array();
	}
	public function getalat(){
		$alat= $this->db->query('SELECT * FROM data_alat'); 
		return $alat->result_array();
	}
	public function InsertData()
	{
		$res = $this->db->insert('form_add', $data);
		return $res;
	}
	public function UpdateData($tableId, $data, $where)
	{
		$res = $this->db->update($tableId, $data, $where);
		return $res;
	}
}
?>