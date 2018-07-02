<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index(){
		$bukus 			= $this->m_buku->listBuku();
		$kategoris 	= $this->m_crud->get('kategori');
		$data = array(
			'title'			=> 'Data Buku',
			'bukus'			=> $bukus,
			'kategoris'	=> $kategoris,
			'isi'				=> 'backend/buku/list'
		);
		$this->load->view('backend/layout_update/wrapper',$data);
	}
	public function tambah(){
		if($this->input->post('submit') == 'Submit'){
	    $data = array(
	    	$id_kategori 	= $this->input->post('id_kategori'),
	    	$isbn 				= $this->input->post('isbn'),
	    	$judul_buku 	= $this->input->post('judul_buku'),
	    	$bahasa 			= $this->input->post('bahasa'),
	    	$pengarang 		= $this->input->post('pengarang'),
	    	$penerbit 		= $this->input->post('penerbit'),
	    	$thn_terbit 	= $this->input->post('thn_terbit'),
	    	$jumlah 			= $this->input->post('jumlah'),
	    );
	    $this->m_buku->insertBuku($data);
	    // var_dump($cek);die();
	    redirect('buku');
	  }else{
	  	echo 'gagal';
	  }
  }
	public function edit($id_buku){
		$kategori = $this->m_buku->listKategori();
		$buku = $this->m_buku->detailBuku($id_buku);
		$validasi = $this->form_validation;
		$validasi->set_rules('judul_buku','Judu Buku','required');
		if($validasi->run() == FALSE){
			$data = array(
				'title'			=> 'Edit Buku',
				'kategori'	=> $kategori,
				'buku'			=> $buku,
				'isi'				=> 'backend/buku/edit'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$input 	= $this->input->post();
			$data 	= array(
				'id_buku'			=> $id_buku,
				'id_kategori'	=> $input['id_kategori'],
				'isbn'				=> $input['isbn'],
				'judul_buku'	=> $input['judul_buku'],
				'bahasa'			=> $input['bahasa'],
				'pengarang'		=> $input['pengarang'],
				'penerbit'		=> $input['penerbit'],
				'thn_terbit'	=> $input['thn_terbit'],
				'jumlah'			=> $input['jumlah'],
			);
			$this->m_buku->updateBuku($data);
			$this->session->set_flashdata('sukses','Data Berhasil Diupdate');
			redirect('buku');
		}
	}
	public function delete($id_buku){
		$data = array('id_buku' => $id_buku);
		$this->m_buku->deleteBuku($data);
		$this->session->set_flashdata('sukses','Data Berhasil Didelete');
		redirect('buku');
	}

	public function peminjaman(){
		$buku = $this->m_buku->listBuku();
		$validasi = $this->form_validation;
		// $validasi->set_rules('judul_buku','Judul Buku','required');
		$validasi->set_rules('jumlah_peminjaman','Jumlah Peminjaman','required');
		if($validasi->run() == FALSE){
			$data = array(
				'title' => 'Form Peminjaman',
				'buku'	=> $buku,
				'isi'		=> 'backend/buku/form_peminjaman'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$input = $this->input->post();
			$data = array(
				'id_buku' 					=> $input['id_buku'],
				'id_admin' 					=> $this->session->userdata('id_admin'),
				'tgl_peminjaman' 		=> $input['tgl_peminjaman'],
				// 'lama_peminjaman' 	=> $input['lama_peminjaman'],
				'jumlah_peminjaman' => $input['jumlah_peminjaman'],

			);
			$this->m_buku->insertPeminjaman($data);
			$this->session->set_flashdata('sukses','Anda Berhasil Meminjam');
			redirect('buku/listPeminjaman');
		}	
	}
	public function listPeminjaman(){
		$id_admin = $this->session->userdata('id_admin');
		if($this->session->userdata('hak_akses') == 'user'){
			$pinjam = $this->m_buku->listPeminjamanByUser($id_admin);
			$data = array(
				'title'	=> 'Daftar Peminjaman',
				'pinjam'=> $pinjam,
				'isi'		=> 'backend/buku/list_peminjaman'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$pinjam = $this->m_buku->listPeminjaman();
			$data = array(
				'title'	=> 'Daftar Peminjaman',
				'pinjam'=> $pinjam,
				'isi'		=> 'backend/buku/list_peminjaman'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}
	}
	public function listPeminjam(){
		$id_admin = $this->session->userdata('id_admin');
		if($this->session->userdata('hak_akses') == 'admin'){
			$pinjam = $this->m_buku->listPeminjam();
			$data = array(
				'title'	=> 'Daftar Peminjam',
				'pinjam'=> $pinjam,
				'isi'		=> 'backend/buku/list_peminjaman_dipinjam'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$pinjam = $this->m_buku->listPeminjamByUser($id_admin);
			$data = array(
				'title'	=> 'Daftar Peminjam',
				'pinjam'=> $pinjam,
				'isi'		=> 'backend/buku/list_peminjaman_dipinjam'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}
	}
	public function listKembali(){
		$id_admin = $this->session->userdata('id_admin');
		if($this->session->userdata('hak_akses') == 'admin'){
			$pinjam = $this->m_buku->listKembali();
			$data = array(
				'title'	=> 'Daftar Kembali',
				'pinjam'=> $pinjam,
				'isi'		=> 'backend/buku/list_peminjaman_kembali'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$pinjam = $this->m_buku->listKembaliByUser($id_admin);
			$data = array(
				'title'	=> 'Daftar Kembali',
				'pinjam'=> $pinjam,
				'isi'		=> 'backend/buku/list_peminjaman_kembali'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}
	}
	public function status_dipinjam($id_peminjaman){
    $loker = $this->m_buku->detailPeminjaman($id_peminjaman);
    $data = array(
      'id_peminjaman'      	=> $id_peminjaman,
      'status_peminjaman'  	=> 'dipinjam'
    );
    $this->m_buku->updatePeminjaman($data);
    redirect('buku/listPeminjaman');
  }
  public function status_kembali($id_peminjaman){
    $loker = $this->m_buku->detailPeminjaman($id_peminjaman);
    $data = array(
      'id_peminjaman'      => $id_peminjaman,
      'status_peminjaman'  => 'kembali'
    );
   	$this->m_buku->updatePeminjaman($data);
    redirect('buku/listPeminjaman');  
  }

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */