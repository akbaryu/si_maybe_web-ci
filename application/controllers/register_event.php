<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_event extends CI_Controller
{

    public function index()
    {
        redirect('register_event/register');
    }
	
	function register(){
		//        $data = $this->Model_app->getAll_dataregister();
		$this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_dataregister();
        $this->load->view('displayregister',$data);
	}
    function insert_registerevent()
    {
        if ($this->input->post('Submit')) {
            $this->Model_app->savedataregister();
        }
        redirect('displayregister');
    }

    //function insertdata(){
     //   if($this->input->post('Submit')) {
     //       $this->Model_app->savedataregister();
     //   }
     //   redirect('register_event/index');
     //   }
    
    function do_upload(){
        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '1907';
        $config['max_height'] = '1280';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            echo $this->upload->display_errors();
        } else {
            $finfo = $this->upload->data();
//            $data['uploadInfo'] = $finfo;
            $data['thumbnail_name'] = $finfo['raw_name'] . '_thumb' . $finfo['file_ext'];
            $this->load->model('Model_app');
            $this->Model_app->savedataregister($finfo);
            $data['query'] = $this->Model_app->getAll_dataevent();
            $data['query'] = $this->Model_app->getAll_dataregister();
            $data['judul'] = $this->input->post('judul');
            $data['deskripsi'] = $this->input->post('deskripsi');
            $data['judul_event'] = $this->input->post('judul_event');
            $data['deskripsi_event'] = $this->input->post('deskripsi_event');
            $this->load->view('displayregister_sukses', $data);
        }
    }

//    function insertdata(){
//        if($this->input->server("REQUEST_METHOD") == "POST" && $this->input->post("Submit") == "Submit")
//        {
//            $data = array(
//                "nama" => $this->input->post("nama"),
//                "email"     => $this->input->post("email"),
//                "judul_event"  => $this->input->post("judul"),
//                "deskripsi_event" => $this->input->post("deskripsi")
//            );
//            $this->Model_app->savedata($data);
//            header('location:http://localhost/MAYBEproject/index.php/Home');
//        }
//        else {
//           // $data = array("error" => 0);
//           // $this->load->view("headerhome");
//            $this->load->view("displayregister", $data);
//            //$this->load->view("footerheader");
//        }
//    }

//    function updatedata($id_user){
//        if($this->input->post('submit')){
//            $data('id_user') = $id_user;
//
//        }
//    }
}
