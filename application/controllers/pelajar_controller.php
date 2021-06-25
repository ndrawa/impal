<?php
 class pelajar_controller extends CI_Controller {
 	public function __construct() {
 		parent::__construct();
 		$this->load->model('pelajar_model');
 		$this->load->model('pengajar_model');
 		$this->load->model('admin_model');
 	}

	public function get_pelajar_data() {
		$username = $this->sesison->userdata('session_username');
		$result = $this->pasien_model->get_by_username($username);
    	echo json_encode($result);
	}

	public function view_matakuliah() {
		$data['matakuliah'] = $this->admin_model->get_all_matakuliah();
		$this->load->view('admin/view_matakuliah', $data);
	}

	public function view_materi() {
		$data['data_matkul'] = $this->admin_model->get_matkul();
		$data['data_materi'] = $this->admin_model->get_materi();
		$this->load->view('Pengajar/view_materi', $data);
	}

	public function view_pengajar(){
		$data['judul'] = 'View Pengajar';
		$data['pengajar'] = $this->pengajar_model->getall_pengajar();
		$this->load->view('Pengajar/view_pengajar',$data);
	}
}
