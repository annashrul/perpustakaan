<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		if($this->session->userdata('hak_akses') == 'admin'){
			$data = array(
				'title'	=> 'Dashboard Admin Perpustakaan',
				'isi'		=> 'backend/dashboard/list'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}else{
			$data = array(
				'title'	=> 'Dashboard Perpustakaan',
				'isi'		=> 'backend/dashboard/list'
			);
			$this->load->view('backend/layout_update/wrapper',$data);
		}
	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */