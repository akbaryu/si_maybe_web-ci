<?php
class Login_model extends CI_Model{
	function check_db(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('data_admin');
		return $query->result();
	}
}
?>