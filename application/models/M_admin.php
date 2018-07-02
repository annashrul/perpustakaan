<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function login($username,$password){
		$query = $this->db->get_where('admin',array(
			'username' => $username,
			'password' => $password,
		));
		return $query->row();
	}
	public function register($data){
		$this->db->insert('admin',$data);
	}
	public function insert($data){
		$this->db->insert('admin',$data);
	}
	public function detail($id_admin){
		$query = $this->db->get_where('admin',array('id_admin' => $id_admin));
		return $query->row();
	}
	public function pengguna(){
		$query = $this->db->get('admin');
		return $query->result();
	}
	public function update($data){
		$this->db->where('id_admin',$data['id_admin']);
		$this->db->update('admin',$data);
	}
	public function delete($data){
		$this->db->where('id_admin',$data['id_admin']);
		$this->db->delete('admin',$data);
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */