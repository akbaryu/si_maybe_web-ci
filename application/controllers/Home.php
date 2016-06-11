<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datatips();
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
    $this->load->helper('text');
    $this->load->model('Model_app');
    $data['query'] = $this->Model_app->getAll_datatips();
    $this->load->view('displayhome', $data);
    }

    function masuk_admin(){
        $this->load->view('homeAdmin');
    }
}