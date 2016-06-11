<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konfirmasi_event extends CI_Controller
{

    function verify_event(){
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_dataregister();
        $this->load->view('verify_event', $data);
    }

    function ignore($id){
        $this->Model_app->tolak($id);
        redirect('konfirmasi_event/verify_event');
    }
    function confirm($id){
        $this->Model_app->terima($id);
        redirect('konfirmasi_event/verify_event');
    }

//    function insert_datagejala()
//    {
//        if ($this->input->post('Submit')) {
//            $this->Model_app->savedatagejala();
//        }
//        redirect('gejala/tambah_gejala');
//    }
}