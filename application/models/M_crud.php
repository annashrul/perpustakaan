<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function insert($table,$data){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	public function get($table){
		$query = $this->db->get($table);
		return $query;
	}
	public function get_where($table=NULL,$where=NULL){
		$query = $this->db->get_where($table,$where);
		return $query;
	}
	public function update($table=NULL,$data=NULL,$where=NULL){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}