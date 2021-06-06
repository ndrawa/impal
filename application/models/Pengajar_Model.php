<?php
class pengajar_model extends CI_Model
{
	function auth_pelajar($username,$password){
		$query=$this->db->query("SELECT * FROM pelajar WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_pengajar($username, $password){
		$query=$this->db->query("SELECT * FROM pengajar WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function get_matkul($pengajar){
		$query = $this->db->query("SELECT kode_matakuliah, nama_matakuliah FROM matakuliah WHERE kode_pengajar = '$pengajar'");
		return $query->result_array();
	}

	function create_materi(){
		$data = [
			"kode_materi" => $this->input->post('id_materi', true),
			"kode_matakuliah" => $this->input->post('id_matakuliah'),
			"nama_materi" => $this->input->post('nama_materi', true),
		];
		$this->db->insert('materi',$data);
	}
}