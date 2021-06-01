<?php
	class admin_model extends CI_Model {

        public function create_matakuliah()
		{
			$data = [
				"kode_matakuliah" => $this->input->post('id_matakuliah'),
				"kode_pengajar" => $this->input->post('id_pengajar', true),
				"nama_matakuliah" => $this->input->post('nama_matakuliah', true),
			];
			$this->db->insert('matakuliah',$data);
		}

		public function cari_idmatkul()
		{
			$this->db->select('kode_matakuliah, kode_pengajar, nama_matakuliah');
			$this->db->from('matakuliah');
			$this->db->where('kode_matakuliah', $this->input->post('id_matakuliah'));
			$query = $this->db->join('pengajar', 'matakuliah.kode_pengajar = pengajar.kode_pengajar');
			return $query;
		}

		public function getall_pengajar()
		{
			return $this->db->get('pengajar')->result_array();
		}
	}