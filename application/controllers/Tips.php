<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $data['query']=$this->Model_app->getAll_datatips();

    }

    public function index()
    {
        $data['query']=$this->Model_app->getAll_datatips();
        $this->load->view('displaykategori_tips');
    }

    public function tips_ibu()
    {
        //$this->load->model('Model_app', '', TRUE);
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datatips();
        $this->load->view('displaytips_ibu', $data);

    function detail(){
        $this->load->view('detail');
    }


        //$this->load->model('Model_app');
        //$data['query']=$this->Model_app->getAll_datatips();
        //$data['judul_tips'] = $this->input->post('judul_tips');
        //$data['deskripsi_tips'] = $this->input->post('deskripsi_tips');
        //$this->load->view('displaytips_ibu',$data);
    }

    public function tips_bayi()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datatips();
        $this->load->view('displaytips_bayi', $data);

///////////////asdasdasdasd

        //$this->load->model('Model_app');
        //$data['query']=$this->Model_app->getAll_datatips();
        //$data['judul_tips'] = $this->input->post('judul_tips');
        //$data['deskripsi_tips'] = $this->input->post('deskripsi_tips');
        //$this->load->view('displaytips_bayi',$data);
    }

    function tambah_tips()
    {
        $this->load->view('tambah_tips');
//        $jenis1 = array('nama'=>'jenis_tips','id'=>'jenis_tips','value'=>'Tips Ibu Hamil');
//        $jenis2 = array('nama'=>'jenis_tips','id'=>'jenis_tips','value'=>'Tips Bayi');
//        $data['Ibu'] = form_radio($jenis1);
//        $data['Bayi'] = form_radio($jenis2);
    }

    function insert_datatips(){
        if($this->input->post('Submit')) {
            $this->Model_app->savedatatips();
        }
        redirect('tips/tambah_tips');
    }

    function do_upload()
    {
        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '1907';
        $config['max_height'] = '1280';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            echo $this->upload->display_errors();
        } else {
            $finfo = $this->upload->data();
//            $this->_createThumbnail($finfo['file_name']);
            $data['uploadInfo'] = $finfo;
            $data['thumbnail_name'] = $finfo['raw_name'] . '_thumb' . $finfo['file_ext'];
            $this->load->model('Model_app');
            $this->Model_app->savedatatips($finfo);
            $data['query'] = $this->Model_app->getAll_datatips();
            $data['judul_tips'] = $this->input->post('judul_tips');
            $data['deskripsi_tips'] = $this->input->post('deskripsi_tips');
            $data['tgl'] = $this->input->post('tgl');

            if ($this->input->post('jenis_tips') == 'Tips Ibu Bayi') {
                //$this->load->view('displaytips_ibu', $data);
                $this->load->view('tambah_tips_sukses');
            }else{
                //$this->load->view('displaytips_bayi', $data);
                $this->load->view('tambah_tips_sukses');
            }

        }
    }

    function tambah_tips_sukses()
    {
        $this->load->model('Model_app');
        $this->load->view('tambah_tips_sukses', $data);
    }
    
}