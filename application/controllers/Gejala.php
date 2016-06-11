<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('Model_app');
    }




    

    public function index()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datagejala();
        $data['nama_gejala'] = $this->input->post('nama_gejala');
            $data['judul_artikel'] = $this->input->post('judul_artikel');
            $data['deskripsi_gejala'] = $this->input->post('deskripsi_gejala');
        $this->load->view('displaygejala', $data);
    }

    function tambah_gejala(){
          $this->load->model('Model_app');
        $data['query']=$this->Model_app->getAll_datagejala();
        $this->load->view('tambah_gejala', $data);
    }


    function insert_datagejala()
    {
        if ($this->input->post('Submit')) {
            $this->Model_app->savedatagejala();
        }
        redirect('gejala/tambah_gejala_sukses');
    }

    
     
    //function cariData(){
    //    $cari=$this->input->get('cari');
    //    $beda['cari']=$this->Model_app->cariGejala($cari);
    //    $this->load->view('displaysearch',$beda);
    //}

    //function search_gejala(){
    //     $cari=$this->input->get('cari');
    //     $data['results']=$this->Model_app->search_datagejala($cari);
    //     $this->load->view('displaysearch',$data);
    // }

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
            $this->Model_app->savedatagejala($finfo);
            $data['query'] = $this->Model_app->getAll_datagejala();
            $data['nama_gejala'] = $this->input->post('nama_gejala');
            $data['judul_artikel'] = $this->input->post('judul_artikel');
            $data['deskripsi_gejala'] = $this->input->post('deskripsi_gejala');

            $this->load->view('tambah_gejala_sukses', $data);
        }
    }

    function tambah_gejala_sukses()
    {
        $this->load->model('Model_app');
        $this->load->view('tambah_gejala_sukses', $data);
    }


/////////////////////////////////////////////
   
 
    
    public function hasil()
    {
        $data2['cari'] = $this->Model_app->cariGejala();
        $this->load->view('displaysearch', $data2);
    }

}