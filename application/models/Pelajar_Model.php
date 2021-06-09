<?php
	class pelajar_model extends CI_Model {
		function auth_pelajar($username,$password){
			$query=$this->db->query("SELECT * FROM pelajar WHERE username='$username' AND password='$password' LIMIT 1");
			return $query;
		}

		function auth_pengajar($username, $password){
			$query=$this->db->query("SELECT * FROM pengajar WHERE username='$username' AND password='$password' LIMIT 1");
			return $query;
		}

		function view_materi() {
			$kode_matkul = $this->input->post('id_matakuliah');
			if ($kode_matkul != "") {
				$query = $this->db->query("SELECT kode_materi, nama_materi, nama_matakuliah FROM materi 
				INNER JOIN matakuliah ON matakuliah.kode_matakuliah=materi.kode_matakuliah
				WHERE matakuliah.kode_matakuliah=materi.kode_matakuliah");
				return $query->result_array();
			} else {
				return NULL;
			}
		}
	}