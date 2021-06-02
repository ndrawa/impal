<?php
 class pelajar extends CI_Controller {
 	public function __construct() {
 		parent::__construct();
 		$this->load->model('pelajar_model');
 	}
 	
 	public function index() {
		$data[‘pelajar’] = $this->pelajar_model->get_all_pelajar();
		$this->load->view('pelajar/V_KelolaPelajar', $data);  
 	}

	public function get_pelajar_data() {
		$username = $this->sesison->userdata('session_username');
		$result = $this->pasien_model->get_by_username($username);
    	echo json_encode($result);
	}

	public view_matakuliah()
	{
		$this->load->view('pelajar/view_materi');
	}
}
