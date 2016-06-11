<?php
class Admin3 extends CI_Controller{
	function index(){
		redirect('Admin3/check_login');
	}

	function check_login(){
		if($this->session->userdata('login') == 'TRUE')
		{
			$data['username'] = $this->session->userdata('userlogin');
			$data['login'] = $this->session->userdata('login');
			$data['keterangan']=$this->session->userdata('keterangan');
			$this->load->view('homeAdmin',$data);
		}
		else{
			$data['pesan'] = 'Silahkan Login';
			$this->load->view('view_login',$data);
		}
	}
}
?>