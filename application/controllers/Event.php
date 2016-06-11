<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $this->load->model('Model_app');
        $data['query']=$this->Model_app->getAll_dataevent();
//        redirect('event/do_upload');
        $data['judul'] = $this->input->post('judul');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $data['judul_event'] = $this->input->post('judul_event');
        $data['deskripsi_event'] = $this->input->post('deskripsi_event');
        $this->load->view('displayevent', $data);
    }

    function tambah_event()
    {
        $this->load->model('Model_app');
        $data['query']=$this->Model_app->getAll_dataevent();
        $this->load->view('tambah_event', $data);
    }

    function insert_dataevent()
    {
        if ($this->input->post('Submit')) {
            $this->Model_app->savedataevent();
        }
        redirect('Event/tambah_event');
    }

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
            $this->Model_app->savedataevent($finfo);
            $data['query'] = $this->Model_app->getAll_dataevent();
            $data['query'] = $this->Model_app->getAll_dataregister();
            $data['judul'] = $this->input->post('judul');
            $data['deskripsi'] = $this->input->post('deskripsi');
            $data['judul_event'] = $this->input->post('judul_event');
            $data['deskripsi_event'] = $this->input->post('deskripsi_event');
            $this->load->view('tambah_event_sukses', $data);
        }
    }
    function tambah_event_sukses()
    {
        $this->load->model('Model_app');
//        $data['judul'] = $this->input->post('judul');
//        $data['deskripsi'] = $this->input->post('deskripsi');
        $this->load->view('tambah_event_sukses');
    }

    function hapus_event()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_dataevent();
        $this->load->view('hapus_event', $data);
    }

    function delete($id)
    {
        $this->Model_app->hapus($id);
        redirect('event/hapus_event');
    }

}
?>


