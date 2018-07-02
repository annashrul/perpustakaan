<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {

	public function listBuku(){
		$this->db->select('buku.*,kategori.nama_kategori,kategori.id_kategori');
		$this->db->from('buku');
		$this->db->join('kategori','kategori.id_kategori = buku.id_kategori','LEFT');
		$this->db->order_by('id_buku','DESC');
		$query = $this->db->get();
		return $query;
	}
	public function insertBuku($data){
		$this->db->insert('buku',$data);
	}
	public function detailBuku($id_buku){
		$query = $this->db->get_where('buku',array('id_buku' => $id_buku));
		return $query->row();
	}
	public function updateBuku($data){
		$this->db->where('id_buku',$data['id_buku']);
		$this->db->update('buku',$data);
	}
	public function deleteBuku($data){
		$this->db->where('id_buku',$data['id_buku']);
		$this->db->delete('buku',$data);
	}

	//KATEGORI MODEL//
	public function listKategori(){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function insertKategori($data){
		$this->db->insert('kategori',$data);
	}
	public function detailKategori($id_kategori){
		$query = $this->db->get_where('kategori',array('id_kategori' => $id_kategori));
		return $query->row();
	}
	public function updateKategori($data){
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->update('kategori',$data);
	}
	public function deleteKategori($data){
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->delete('kategori',$data);
	}

	//PEMINJAMAN MODEL//
	//ADMIN//
	public function listPeminjaman(){
		$this->db->select('peminjaman.*,buku.judul_buku,admin.username,admin.nama');
		$this->db->from('peminjaman');
		$this->db->join('buku','buku.id_buku = peminjaman.id_buku','LEFT');
		$this->db->join('admin','admin.id_admin = peminjaman.id_admin','LEFT');
		$this->db->order_by('id_peminjaman','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function listPeminjam(){
		$this->db->select('peminjaman.*,buku.judul_buku,admin.username,admin.nama');
		$this->db->from('peminjaman');
		$this->db->join('buku','buku.id_buku = peminjaman.id_buku','LEFT');
		$this->db->join('admin','admin.id_admin = peminjaman.id_admin','LEFT');
		$this->db->where(array('status_peminjaman' => 'dipinjam'));
		$this->db->order_by('id_peminjaman','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function listKembali(){
		$this->db->select('peminjaman.*,buku.judul_buku,admin.username,admin.nama');
		$this->db->from('peminjaman');
		$this->db->join('buku','buku.id_buku = peminjaman.id_buku','LEFT');
		$this->db->join('admin','admin.id_admin = peminjaman.id_admin','LEFT');
		$this->db->where(array('status_peminjaman' => 'kembali'));
		$this->db->order_by('id_peminjaman','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	//USER//
	public function listPeminjamanByUser($id_admin){
		$this->db->select('peminjaman.*,buku.judul_buku,admin.username,admin.nama');
		$this->db->from('peminjaman');
		$this->db->join('buku','buku.id_buku = peminjaman.id_buku','LEFT');
		$this->db->join('admin','admin.id_admin = peminjaman.id_admin','LEFT');
		$this->db->where('admin.id_admin',$id_admin);
		$this->db->order_by('id_peminjaman','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function listPeminjamByUser($id_admin){
		$this->db->select('peminjaman.*,buku.judul_buku,admin.username,admin.nama');
		$this->db->from('peminjaman');
		$this->db->join('buku','buku.id_buku = peminjaman.id_buku','LEFT');
		$this->db->join('admin','admin.id_admin = peminjaman.id_admin','LEFT');
		$this->db->where(array('status_peminjaman' => 'dipinjam'));
		$this->db->where('admin.id_admin',$id_admin);
		$this->db->order_by('id_peminjaman','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function listKembaliByUser($id_admin){
		$this->db->select('peminjaman.*,buku.judul_buku,admin.username,admin.nama');
		$this->db->from('peminjaman');
		$this->db->join('buku','buku.id_buku = peminjaman.id_buku','LEFT');
		$this->db->join('admin','admin.id_admin = peminjaman.id_admin','LEFT');
		$this->db->where(array('status_peminjaman' => 'kembali'));
		$this->db->where('admin.id_admin',$id_admin);
		$this->db->order_by('id_peminjaman','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	public function insertPeminjaman($data){
		$this->db->insert('peminjaman',$data);
	}
	public function detailPeminjaman($id_peminjaman){
    $query = $this->db->get_where('peminjaman',array('id_peminjaman' => $id_peminjaman));
    return $query->row();
  }
  public function updatePeminjaman($data){
		$this->db->where('id_peminjaman',$data['id_peminjaman']);
		$this->db->update('peminjaman',$data);
	}


}

/* End of file M_buku.php */
/* Location: ./application/models/M_buku.php */