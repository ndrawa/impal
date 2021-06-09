<?php
class pengajar_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajar_model');
		$this->load->library('form_validation');
	}

	public function input_materi() {
		$pengajar = $this->session->userdata('session_kode');
		$data['data_matkul'] = $this->pengajar_model->get_matkul($pengajar);
		$data['judul'] = 'Form Create Materi';
		$this->form_validation->set_rules('id_materi','nama_materi','required');
		if ($this->form_validation->run() == false){
			$this->load->view('Pengajar/input_materi',$data);
			$this->session->set_flashdata('flash_add','failed');
		}else{
			$this->pengajar_model->create_materi();
			$this->session->set_flashdata('flash_add','success');
			$this->load->view('Pengajar/input_materi',$data);
			// echo $this->session->set_flashdata('flash','added success');
			// echo $this->session->set_flashdata('flash','added failed');
		}
	}

	public function view_materi() {
		$pengajar = $this->session->userdata('session_kode');
		$data['data_matkul'] = $this->pengajar_model->get_matkul($pengajar);
		$data['data_materi'] = $this->pengajar_model->get_materi($pengajar);
		$this->load->view('Pengajar/view_materi', $data);
	}

	public function fetch_materi($kode_matkul) {

	}

	public function view_pengajar(){
		$data['judul'] = 'View Pengajar';
		$data['pengajar'] = $this->pengajar_model->getall_pengajar();
		$this->load->view('Pengajar/view_pengajar',$data);
	}
}