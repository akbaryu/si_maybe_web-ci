<?php

class Model_app extends CI_Model{

    function getAll_dataregister(){
        $this->db->order_by('id_event','ASC');
        $query = $this->db->get('register_event');
        return $query->result();
    }

    function getAll_dataadmin(){
        $this->db->order_by('username','ASC');
        $query = $this->db->get('data_admin');
        return $query->result();
    }

    function getAll_datatips(){
        $this->db->order_by('id_tips');
        $query=$this->db->get('data_tips');
        return $query->result();
    }

    function getAll_datagejala(){
        $this->db->order_by('id_gejala');
        $query = $this->db->get('data_gejala');
        return $query->result();
    }

    function getAll_dataevent(){
        $this->db->order_by('id_event','DESC');
        $query = $this->db->get('data_event');
        return $query->result();
    }

    function savedataregister($uploadInfo){
        $data = array(
            'judul'=> $this->input->post('judul'),
            'deskripsi'=> $this->input->post('deskripsi'), 
            'username'=> $this->input->post('username'),
            'email'=> $this->input->post('email'), 
            'telp'=> $this->input->post('telp'),
            'bataswaktu'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'),
            'gambar' => $uploadInfo['file_name']);
        $this->db->insert('register_event',$data);
    }

    function savedataevent($uploadInfo){
        $data = array(
            'judul'=> $this->input->post('judul'),
            'deskripsi'=> $this->input->post('deskripsi'), 
            'email'=> ('admin@gmail.com'),
            'telp'=> ('08123456789'),
            'bataswaktu'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'),
            'gambar' => $uploadInfo['file_name']);

        $this->db->insert('data_event',$data);
    }

    function savedatatips($uploadInfo){
        $data = array(
            'judul_tips'=> $this->input->post('judul_tips'),
            'deskripsi_tips'=> $this->input->post('deskripsi_tips'),
            'jenis_tips'=> $this->input->post('jenis'),
            'tgl'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'),
            'gambar' => $uploadInfo['file_name']);
        $this->db->insert('data_tips',$data);
    }

    function savedatagejala(){
        $data = array('nama_gejala'=> $this->input->post('nama_gejala'),'judul_artikel'=> $this->input->post('judul_artikel'),
            'deskripsi_gejala'=> $this->input->post('deskripsi_gejala'));
        $this->db->insert('data_gejala',$data);
    }

    public function cariGejala()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from data_gejala where deskripsi_gejala like '%$cari%' ");
        return $data->result();
    }

    //public function search_datagejala($cari)
    //{
    //    $this->db->like('nama_gejala',$cari);
    //    $query=$this->db->get('data_gejala');
    //    return $query->result();
    //}

    function tolak($id){
        $this->db->where('id_event',$id);
        $this->db->delete('register_event');
    }

    function terima($id){
        return $this->db->query('INSERT INTO data_event (judul, deskripsi, gambar, email, bataswaktu)
              SELECT judul, deskripsi, gambar, email, bataswaktu FROM register_event WHERE id_event = '.$id);
    }

    function hapus($id){
        $this->db->where('id_event',$id);
        $this->db->delete('data_event');
    }

    function save_update_gejala($id_gejala){
        $data = array('nama_gejala'=> $this->input->post('nama_gejala'),'judul_artikel'=> $this->input->post('judul_artikel'),'deskripsi_gejala'=> $this->input->post('deskripsi_gejala'));
        $this->db->where('id_gejala', $id_gejala);
        $this->db->update('data_gejala', $data);
    }

    function save_update_tips($id_tips){
        $data = array('judul_tips'=> $this->input->post('judul_tips'),'deskripsi_tips'=> $this->input->post('deskripsi_tips'),
            'tgl'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'),'jenis_tips'=> $this->input->post('jenis'));
        $this->db->where('id_tips', $id_tips);
        $this->db->update('data_tips', $data);
    }

    function save_update_event($id_event){
        $data = array('judul'=> $this->input->post('judul'),'deskripsi'=> $this->input->post('deskripsi'),
            'bataswaktu'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'));
        $this->db->where('id_event', $id_event);
        $this->db->update('data_event', $data);
    }

    function cek_database() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('data_admin');
        return $query->result();
    }
}