<?php
class pengajar_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function input_materi() {
		$this->load->view('Pengajar/input_materi');
	}
}