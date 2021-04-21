<?php
	class admin_model extends CI_Model {

        public function create_matakuliah()
		{
			$data = [
				"kode_matakuliah" => $this->session->userdata('id_matakuliah'),
				"kode_pengajar" => $this->input->post('id_pengajar', true),
				"nama_matakuliah" => $this->input->post('nama_matakuliah', true),
			];
			$this->db->insert('matakuliah',$data);
		}
	}