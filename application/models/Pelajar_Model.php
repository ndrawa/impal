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
	}