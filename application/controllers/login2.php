<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login2 extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
  	if($this->session->userdata('logged_in'))
   		{
    		redirect('home2', 'refresh');
    	}
    	else 
    	{
    		$this->load->helper(array('form'));
  			$this->load->view('login_view');
    	}

  }

}

?>