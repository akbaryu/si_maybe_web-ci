<?php
class Admin_login extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
    }
	
	    function index(){
        $data=array(
            'title'=>'Login'
        );
        $this->load->view('headeradmin',$data);
        $this->load->view('homeadmin');
        $this->load->view('footeradmin');
    }

}