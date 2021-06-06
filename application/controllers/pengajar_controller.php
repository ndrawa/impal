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
}