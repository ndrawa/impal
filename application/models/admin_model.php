<?php
	class admin_model extends CI_Model {
		function create_matakuliah($id_matakuliah,$nama_matakuliah,$id_pengajar,$nama_pengajar){
			$query=$this->db->query("INSERT INTO materi (kode_matakuliah, kode_pengajar, nama_matakuliah) VALUES ($id_matakuliah,$id_pengajar$nama_matakuliah,)");
			return $query;
		}

        function auth_pengajar($username, $password){
			$query=$this->db->query("SELECT * FROM pengajar WHERE username='$username' AND password='$password' LIMIT 1");
			return $query;
		}
	}