<?php
class Login3 extends CI_Controller{
	function index(){
		redirect('login3/login');
	}

	function login(){
		$this->load->view('view_login');
	}
	
	function check_auth(){
		$this->load->model('Model_app');
		$data['hasilquery'] = $this->Model_app->cek_database();
		
		if($data['hasilquery'] != null){
		    $this->load->library('session');
			
			$username = $data['hasilquery'][0]->username;
			$sessiondata = array('userlogin'=>$username,'login'=>'TRUE');
			$this->session->set_userdata($sessiondata);
			
			
				redirect(admin3,$data);
					}
		else
		{
			$this->session->set_flashdata('message', 'Username / password anda salah! ulangi lagi!');
			$this->load->view('view_login',$data);
		}
	}
	
	function logout(){
		$sessiondata = array('userlogin'=>'','login'=>'FALSE','keterangan'=>'');
		$this->session->unset_userdata($sessiondata);
		redirect('login3/index');
	}
}
?>