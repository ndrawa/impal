<!-- 
pendahuluan : ini adalah controller dari pelajar, setiap akan mengolah data akan menggunakan metode-metode 
yang ada pada controller ini. mengacu pada perancangan dari kelas pelajar yaitu pada 
https://github.com/ndrawa/impal/blob/master/DPPL.pdf  hal 21.
-->

<!-- 
Data yang diolah adalah data-data yang meiliki hubungan dengan kelas pelajar seperti nama, nim, jurusan dan semester
 -->

<!-- 
get_pelajar_data() untuk mengambil data berdasarkan username yang diambil dari session.
-->
<?php
 class pelajar extends CI_Controller {
 	public function __construct() {
 		parent::__construct(); //Deklarasi method konstruk untuk kelas pelajar
 		$this->load->model('pelajar_model'); //memuat model dari pelajar
 	}
 	
 	public function index() {
		$data[‘pelajar’] = $this->pelajar_model->get_all_pelajar();//menyimpan indeks pelajar didalam list
		$this->load->view('pelajar/Pelajar_View', $data); //memuat halaman pelajar dengan data yang sudah tersmipan di dalam list
 	}

	public function get_pelajar_data() {
		$username = $this->sesison->userdata('session_username'); //mengambil nama pelajar dari session username
		$result = $this->Pelajar_Model->get_by_username($username); //mengambil data pelajar dari database berdasarkan $username
    	echo json_encode($result); //mengubah tampilan json ke tampilan yang mudah dibaca
	}
}
