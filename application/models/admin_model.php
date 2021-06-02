<?php
	// Pendahuluan 
	// 	Tujuan dari admin_model adalah memodelkan proses yang akan dilakukan oleh admin pada database.
	// 	Admin merupakan role yang betugas mengelolah matakuliah dan pada role admin terdapat 4 fitur yaitu insert update view dan delete.
	// 	Rujukan pada souce code ini adalah DPPL Coolyeah, dapat diakses melalui https://github.com/ndrawa/impal/blob/master/DPPL.pdf
	// 	terdapat Perancangan Detil Kelas Matakuliah pada halaman 24

	// Penjelasan data yang diolah
	// 	Pada database terdapat table matakuliah dengan column kode_matakuliah, kode_pengajar, dan nama_matakuliah
	// 	untuk melakukan create dan update diperlukan 3 inputan seperti column pada table matakuliah
	// 	dan untuk melakukan view dan delete diperlukan 1 inputan yaitu kode_matakuliah.

	// Penjelasan setiap method
	// 	method yang tersedia ada 4 yaitu :
	// 	- Create_Matakuliah, untuk melakukan insert pada table matakuliah.
	// 	- Edit_Matakuliah, untuk melakukan perubahan pada table matakuliah.
	// 	- Delete_Matakuliah, untuk menghapus data pada table matakuliah.
	// 	- View_Matakuliah, untuk mengambil data pada table matakuliah.

	class admin_model extends CI_Model {

		// fungsi untuk membuat nama matakuliah
        public function Create_Matakuliah()
		{
			// mengambil data inputan id matakuliah, id pengajar dan nama matakuliah dan disimpan pada variabel data
			$data = [
				"kode_matakuliah" => $this->input->post('id_matakuliah'),
				"kode_pengajar" => $this->input->post('id_pengajar', true),
				"nama_matakuliah" => $this->input->post('nama_matakuliah', true),
			];
			// menyimpan data pada database table matakuliah
			$this->db->insert('matakuliah',$data);
		}
		public function cari_idmatkul()
		{
			$this->db->select('kode_matakuliah, kode_pengajar, nama_matakuliah');
			$this->db->from('matakuliah');
			$this->db->where('kode_matakuliah', $this->input->post('id_matakuliah'));
			$query = $this->db->join('pengajar', 'matakuliah.kode_pengajar = pengajar.kode_pengajar');
			// fungsi upload data matakuliah
		}

		function Edit_Matakuliah(){
			// mengambil inputan id matakuliah dan disimpan pada variable kode_matakuliah
			$kode_matakuliah=$this->input->post('id_matakuliah');
			// mengambil inputan id pengajar dan disimpan pada variable id_pengajar
			$kode_pengajar=$this->input->post('id_pengajar', true);
			// mengambil inputan nama matakuliah dan disimpan pada variable nama_matakuliah
			$nama_matakuliah=$this->input->post('nama_matakuliah', true);
	 
			// melakukan set berdasarkan pada database
			$this->db->set('nama', $kode_matakuliah);
			$this->db->set('jeniskelamin', $kode_pengajar);
			$this->db->set('alamat', $nama_matakuliah);	
			// melakukan update pada database table matakuliah
			$result=$this->db->update('matakuliah');
			// output hasil dari proses update
			return $result;
		}

		// funsi delete data pada table matakuliah berdasarkan kode_matakuliah
		function Delete_Matakuliah(){
			// mengambil inputan id_matakuliah dari user dan menyimpannya pada variabel kode_matakuliah
			$kode_matakuliah=$this->input->post('id_matakuliah');
			// mencari data yang akan dihapus pada table matakuliah berdasarkan kode_matakuliah inputan user pada variable kode_matakuliah
			$this->db->where('kode_matakuliah',$kode_matakuliah);
			// melakukan delete data pada matakuliah
			$this->db->delete('matakuliah');
		}

		// fungsi viw data pada table matakuliah berdasarkan kode_matakuliah
		function View_Matakuliah(){
			// mengambil inputan id_matakuliah dari user dan menyimpannya pada variabel kode_matakuliah
			$kode_matakuliah=$this->input->post('id_matakuliah');
			// mencari data pada table matakuliah berdasarkan inputan user pada variabel kode matakuliah
			$query=$this->db->query("SELECT * FROM matakuliah WHERE kode_matakuliah='$kode_matakuliah'");
			// mengeluarkan hasil pencarian pada table matakuliah
			return $query;
		}
	}