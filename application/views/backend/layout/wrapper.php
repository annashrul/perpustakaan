<?php
	//proteksi halaman dengan library simple_login.php
	if($this->session->userdata('username') == ''){
		redirect('admin');
	}

	//gabungkan jadi satu
	require_once ('head.php');
	require_once ('header.php');
	require_once ('nav.php');
	require_once ('content.php');
	require_once ('footer.php');
	
?>