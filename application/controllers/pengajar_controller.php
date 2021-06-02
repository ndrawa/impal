<?php
 class pengajar extends CI_Controller {
 	public function __construct() {
 		parent::__construct();
 		$this->load->model('pengajar_model');
 	}
 	
 	public function index() {
		$data[‘pengajar’] = $this->pengajar_model->get_all_pengajar();
		$this->load->view('pengajar/V_Kelolapengajar', $data);  
 	}

	public function get_pengajar_data() {
		$username = $this->sesison->userdata('session_username');
		$result = $this->pasien_model->get_by_username($username);
    	echo json_encode($result);
	}

	public function input_materi() {
		$this->load->view('Pengajar/input_materi');
	}
}
