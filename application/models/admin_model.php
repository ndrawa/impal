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

		public function edit_matakuliah()
		{
			$data = [
				"kode_matakuliah" => $this->input->post('id_matakuliah'),
				"kode_pengajar" => $this->input->post('id_pengajar', true),
				"nama_matakuliah" => $this->input->post('nama_matakuliah', true),
			];
			$this->db->where('kode_matakuliah', $data['kode_matakuliah']);
			$this->db->update('matakuliah',$data);
		}

		public function delete_matakuliah()
		{
			$data = [
				"kode_matakuliah" => $this->input->post('id_matakuliah'),
				"kode_pengajar" => $this->input->post('id_pengajar', true),
				"nama_matakuliah" => $this->input->post('nama_matakuliah', true),
			];
			$this->db->where('kode_matakuliah', $data['kode_matakuliah']);
			$this->db->delete('materi');
			$this->db->where('kode_matakuliah', $data['kode_matakuliah']);
			$this->db->delete('matakuliah');
		}

		public function cari_idmatkul()
		{
			$this->db->select('kode_matakuliah, kode_pengajar, nama_matakuliah');
			$this->db->from('matakuliah');
			$this->db->where('kode_matakuliah', $this->input->post('id_matakuliah'));
			$query = $this->db->join('pengajar', 'matakuliah.kode_pengajar = pengajar.kode_pengajar');
			return $query;
		}

		public function get_matkul_by_id()
		{
			
		}

		public function get_all_matakuliah()
		{
			$query = $this->db->query("SELECT pengajar.nama , pengajar.kode_pengajar, matakuliah.nama_matakuliah ,
										matakuliah.kode_matakuliah
									   FROM pengajar
									   join matakuliah on matakuliah.kode_pengajar = pengajar.kode_pengajar;");
       		return $query->result();
		}

		function get_matkul(){
			$query = $this->db->query("SELECT * FROM matakuliah");
			return $query->result_array();
		}

		function get_materi() {
		$kode_matkul = $this->input->post('id_matakuliah');
		if ($kode_matkul != "") {
			$query = $this->db->query("SELECT kode_materi, nama_materi, nama_matakuliah, file_materi FROM materi 
				INNER JOIN matakuliah ON matakuliah.kode_matakuliah=materi.kode_matakuliah
				WHERE materi.kode_matakuliah='$kode_matkul'");
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	}