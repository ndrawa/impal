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


	function get_matkul_all(){
		$query = $this->db->query("SELECT kode_matakuliah, nama_matakuliah FROM matakuliah");
		return $query->result_array();
	}

	function create_materi($file_materi){
		$data = [
			"kode_materi" => $this->input->post('id_materi', true),
			"kode_matakuliah" => $this->input->post('id_matakuliah'),
			"nama_materi" => $this->input->post('nama_materi', true),
			"file_materi" => $file_materi,
		];
		$this->db->insert('materi',$data);
	}

	public function edit_materi($file_materi)
	{
		$data = [
			"kode_matakuliah" => $this->input->post('id_matakuliah'),
			"kode_materi" => $this->input->post('id_materi', true),
			"nama_materi" => $this->input->post('nama_materi', true),
			"file_materi" => $file_materi,
		];
		$this->db->where('kode_materi', $data['kode_materi']);
		$this->db->update('materi',$data);
	}

	function get_materi($pengajar) {
		$kode_matkul = $this->input->post('id_matakuliah');
		if ($kode_matkul != "") {
			$query = $this->db->query("SELECT kode_materi, nama_materi, nama_matakuliah, file_materi FROM materi 
				INNER JOIN matakuliah ON matakuliah.kode_matakuliah=materi.kode_matakuliah
				WHERE matakuliah.kode_pengajar='$pengajar' AND materi.kode_matakuliah='$kode_matkul'");
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	function get_materi_all() {
		$kode_matkul = $this->input->post('id_matakuliah');
		if ($kode_matkul != "") {
			$query = $this->db->query("SELECT kode_materi, nama_materi, nama_matakuliah FROM materi 
				INNER JOIN matakuliah ON matakuliah.kode_matakuliah=materi.kode_matakuliah
				WHERE materi.kode_matakuliah='$kode_matkul'");
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	public function get_all_materi_delete()
	{
			$query = $this->db->query("SELECT * from materi;");
       		return $query->result();
	}

	public function get_materi_by_id(){
			$id = $this->uri->segment(3);
			$query = $this->db->query("SELECT *
									   FROM materi 
									   join matakuliah on matakuliah.kode_matakuliah = materi.kode_matakuliah
									   WHERE materi.kode_materi = '$id';");
			return $query->result_array();
	}

	function getall_pengajar(){
		$result = $this->db->query("SELECT pengajar.nama , pengajar.kode_pengajar, matakuliah.nama_matakuliah ,
									matakuliah.kode_matakuliah
								   FROM pengajar
								   join matakuliah on matakuliah.kode_pengajar = pengajar.kode_pengajar;");
		   return $result->result_array();
	}

	function delete_materi(){
		$data = [
				"kode_materi" => $this->input->post('id_materi'),
				"nama_materi" => $this->input->post('nama_materi', true),
			];
			$this->db->where('kode_materi', $data['kode_materi']);
			$this->db->delete('materi');
	}

	/*public function ubahMateri($data)
	{
		$query = "UPDATE materi SET 
									kode_materi = '".$data['kode_materi']."',
									nama_materi = '".$data['nama_materi']."'
				  WHERE kode_ma = ".$data['idjadwal'];
		return $this->db->query($query);
	} */

}