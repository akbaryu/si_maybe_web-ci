<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //Memanggil fungsi session Codeigniter
class Admin extends CI_Controller {
    function index(){
        if($this->session->userdata('login') == 'TRUE')
        {
            $data['username'] = $this->session->userdata('userlogin');
            $data['login'] = $this->session->userdata('login');
            $data['keterangan']=$this->session->userdata('keterangan');
            $this->load->view('admin_home',$data);
        }
        else{
            $data['pesan'] = 'Silahkan Login';
            $this->load->view('displaylogin',$data);
        }
    }
}
?>
