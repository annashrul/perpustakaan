<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		if(isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->m_admin->login($username,$password);
			if(count($cek) > 0){
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('id_admin',$cek->id_admin);
				$this->session->set_userdata('hak_akses',$cek->hak_akses);
				if($this->session->userdata('hak_akses') == 'admin'){
					redirect('dashboard');
				}else{
					redirect('dashboard');
				}
			}else{
				redirect('admin');
			}
		}
		$data = array(
			'title' => 'Login Perpustakaan',
		);
		$this->load->view('backend/login',$data);
	}
	public function register(){
		$validasi = $this->form_validation;
		$validasi->set_rules('nama','Nama','required');
		if($validasi->run() == FALSE){
			$data = array(
				'title' => 'Registrasi',
			);
			$this->load->view('backend/register',$data);
		}else{
			$input = $this->input->post();
			$data = array(
				'nama'			=> $input['nama'],
				'username'	=> $input['username'],
				'password'	=> $input['password']
			);
			$this->m_admin->register($data);
			$this->session->set_flashdata('sukses','Anda Berhasil Melakukan Registrasi');
			redirect('admin');
		}
	}
	public function logout(){
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->set_flashdata('sukses','Anda Berhasil Logout');
		redirect('admin');
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */