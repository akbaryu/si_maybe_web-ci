<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_app', '', TRUE);
//        if($this->session->userdata('login_status') != TRUE ){
//            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
//            redirect('');
//        };
//        $this->load->model('Model_app');
    }


    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
//        $this->load->view('admin_home');
        //Aksi untuk melakukan validasi

        $this->load->library('form_validation');


        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');

        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');


        if ($this->form_validation->run() == FALSE) {

            //Jika validasi gagal user akan diarahkan kembali ke halaman login

            $this->load->view('displaylogin');

        } else {

            //Jika berhasil user akan di arahkan ke private area

            redirect('admin', 'refresh');

        }


    }


    function check_database($password)

    {

        //validasi field terhadap database

        $username = $this->input->post('username');
        $password = $this->input->post('password');


        //query ke database

        $result = $this->Model_app->login($username, $password);


        if ($result) {

            $sess_array = array();

            foreach ($result as $row) {

                $sess_array = array(

                    'id_admin' => $row->id_admin,

                    'username' => $row->username

                );

                $this->session->set_userdata('logged_in', $sess_array);

            }

            return TRUE;

        } else {

            $this->form_validation->set_message('check_database', 'Invalid username or password');

            return false;

        }

    }

}
?>



