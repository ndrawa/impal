<?php
class pengajar_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengajar_model');
	}

	public function input_materi() {
		$data['data_materi'] = $this->Pengajar_model->get_data_matkul();
		$this->load->view('Pengajar/input_materi');
	}
}