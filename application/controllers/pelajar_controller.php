<?php
 class pelajar_controller extends CI_Controller {
 	public function __construct() {
 		parent::__construct();
 		$this->load->model('pelajar_model');
		$this->load->library('form_validation');
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

	public function view_matakuliah() {
		$data['judul'] = 'View materi';
		$this->form_validation->set_rules('required');
		if ($this->form_validation->run() == false){
			$this->load->view('Pelajar/view_matakuliah');
			// $this->session->set_flashdata('flash_add','failed');
		}else{
			$data['data_materi'] = $this->pelajar_model->view_materi();
			// $this->session->set_flashdata('flash_add','success');
			$this->load->view('Pelajar/view_materi',$data);
			// echo $this->session->set_flashdata('flash','added success');
			// echo $this->session->set_flashdata('flash','added failed');
		}
		
	}

	public function view_materi() {
		$this->load->view('Pelajar/view_materi');
	}
}
