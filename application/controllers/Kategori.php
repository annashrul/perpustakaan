<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index(){
		$kategori = $this->m_buku->listKategori();
		$data = array(
			'title'			=> 'Data Kategori',
			'kategori'	=> $kategori,
			'isi'				=> 'backend/kategori/list'
		);
		$this->load->view('backend/layout_update/wrapper',$data);
	}
	public function tambah(){
		$validasi = $this->form_validation;
		$validasi->set_rules('nama_kategori','Nama Kategori Buku','required');
		if($validasi->run() == FALSE){
			$data = array(
				'title'	=> 'Tambah Kategori Buku',
				'isi'		=> 'backend/kategori/tambah'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$input 	= $this->input->post();
			$data 	= array(
				'nama_kategori'				=> $input['nama_kategori'],
			);
			$this->m_buku->insertKategori($data);
			$this->session->set_flashdata('sukses','Data Berhasil Diinput');
			redirect('kategori');
		}
	}
	public function edit($id_kategori){
		$kategori = $this->m_buku->detailKategori($id_kategori);
		$validasi = $this->form_validation;
		$validasi->set_rules('nama_kategori','Nama Kategori Buku','required');
		if($validasi->run() == FALSE){
			$data = array(
				'title'			=> 'Edit Kategori Buku',
				'kategori'	=> $kategori,
				'isi'				=> 'backend/kategori/edit'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$input 	= $this->input->post();
			$data 	= array(
				'id_kategori'			=> $id_kategori,
				'nama_kategori'				=> $input['nama_kategori'],
			);
			$this->m_buku->updateKategori($data);
			$this->session->set_flashdata('sukses','Data Berhasil Diupdate');
			redirect('kategori');
		}
	}
	public function delete($id_kategori){
		$data = array('id_kategori' => $id_kategori);
		$this->m_buku->deleteKategori($data);
		$this->session->set_flashdata('sukses','Data Berhasil Didelete');
		redirect('kategori');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */