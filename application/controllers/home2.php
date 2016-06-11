<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //Memanggil fungsi session Codeigniter
class Home2 extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('home_view', $data);
    }
    else
    {
      //Jika tidak ada session di kembalikan ke halaman login
//      redirect('login2', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home2', 'refresh');
  }


}

?>