<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function index(){
    $pengguna = $this->m_admin->pengguna();
    $data = array(
      'title'	=> 'Data Pengelola Perpustakaan',
      'pengguna' => $pengguna,
      'isi'		=> 'backend/pengguna/index'
    );
    $this->load->view('backend/layout_update/wrapper',$data);
  }
  public function insert(){
    $validasi = $this->form_validation;
    $validasi->set_rules('nama','Nama','required');
    $validasi->set_rules('username','Username','required|is_unique[admin.username]',array(
      'required'  => '* Username Harus Diisi ',
      'is_unique' => 'username <strong>'.$this->input->post('username').'</strong> sudah ada'
    ));
    $validasi->set_rules('password','Password','required|min_length[6]',array(
      'required' => 'Password Harus Diisi',
      'min_length' => 'password minimal 6 karakter'
    ));
    $validasi->set_rules('passconf', 'Password Confirmation', 'trim|required|min_length[6]|max_length[32]|matches[password]',array(
      'required'  => '* Konfirmasi Password Harus Diisi ',
      'min_length'=> '* Password Minimal 6 Karakter',
      'max_length'=> '* Password Maksimal 32 Karakter',
      'matches'   => '* Password Tidak Sama '
    ));
    $validasi->set_rules('hak_akses','Hak Akses','required');
    if($validasi->run() == FALSE){
      $data = array(
        'title' => 'Tambah Pengelola',
        'isi'   => 'backend/pengguna/tambah'
      );
      $this->load->view('backend/layout_update/wrapper',$data);
    
    }else{
      // $input = $this->input->post();
      $data = array(
        'nama'      => $this->input->post('nama'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password'),
        'hak_akses' => $this->input->post('hak_akses'),
      );
      $this->m_admin->insert($data);
      echo '<script>alert("Data Berhasil Disimpan");window.location="'.base_url("pengguna").'"</script>';
      $this->session->set_flashdata('sukses','Data Pengeloa Perpustakaan Berhasil Diinput');
      // redirect('pengguna');
    }
  }

  public function update($id_admin){
    $pengguna = $this->m_admin->detail($id_admin);
    $validasi = $this->form_validation;
    $validasi->set_rules('nama','Nama','required');
    if($validasi->run() == FALSE){
      $data = array(
        'title' => 'Edit Pengelola',
        'pengguna' => $pengguna,
        'isi'   => 'backend/pengguna/edit'
      );
      $this->load->view('backend/layout_update/wrapper',$data);
    }else{
      $input = $this->input->post();
      if(strlen($input['password']) > 6){
        $data = array(
          'id_admin'  => $id_admin,
          'nama'      => $input['nama'],
          'username'  => $input['username'],
          'password'  => $input['password'],
          'hak_akses' => $input['hak_akses'],
        );
      }else{
        $data = array(
          'id_admin'  => $id_admin,
          'nama'      => $input['nama'],
          'username'  => $input['username'],
          // 'password'  => $input'password'],
          'hak_akses' => $input['hak_akses'],
        );
      }
      $this->m_admin->update($data);
      echo '<script>alert("Data Berhasil Disimpan");window.location="'.base_url("pengguna").'"</script>';
      $this->session->set_flashdata('sukses','Data Pengeloa Perpustakaan Berhasil Diupdate');
      // redirect('pengguna');
    }
  }

  public function delete($id_admin){
    $data = array('id_admin' => $id_admin);
    $this->m_admin->delete($data);
    echo '<script>alert("Data Berhasil Didelete");window.location="'.base_url("pengguna").'"</script>';
  }

}