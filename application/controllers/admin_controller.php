<?php
class admin_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('pengajar_model');
		$this->load->library('form_validation');
	}

	public function kelola_matakuliah()
	{
		$this->load->view('admin/kelola_matakuliah');
	}
	
	public function create_matakuliah()
	{
		$data['judul'] = 'Form Tambah Matakuliah';
		$this->form_validation->set_rules('id_matakuliah','nama_matakuliah','required');
		$this->form_validation->set_rules('id_pengajar','nama_pengajar','required');
		if ($this->form_validation->run() == false){
			$this->load->view('admin/create_matakuliah', $data);
			$this->session->set_flashdata('flash_add','failed');
		}else{
			$this->admin_model->create_matakuliah();
			$this->session->set_flashdata('flash_add','success');
			// redirect('/create_matakuliah');
			$this->load->view('admin/create_matakuliah', $data);
			// echo $this->session->set_flashdata('flash','Added success');
			echo $this->session->set_flashdata('flash','failed');
		}
	}

	public function view_matakuliah()
	{
		$data['matakuliah'] = $this->admin_model->get_all_matakuliah();
		$this->load->view('admin/view_matakuliah', $data);
	}

	public function edit_matakuliah()
	{
		$data['judul'] = 'Edit Matakuliah';
		$data['matakuliah'] = $this->admin_model->get_all_matakuliah();
		$this->form_validation->set_rules('id_matakuliah','nama_matakuliah','required');
		$this->form_validation->set_rules('id_pengajar','nama_pengajar','required');
		if ($this->form_validation->run() == false){
			$this->load->view('admin/edit_matakuliah', $data);
			$this->session->set_flashdata('flash_add','failed');
		}else{
			$this->admin_model->edit_matakuliah();
			$this->session->set_flashdata('flash_add','success');
			// redirect('/create_matakuliah');
			$this->load->view('admin/edit_matakuliah', $data);
			echo $this->session->set_flashdata('flash','success');
			// redirect('admin/create_matakuliah');
		}
	}

	public function delete_matakuliah()
	{
		$data['judul'] = 'Delete Matakuliah';
		$data['matakuliah'] = $this->admin_model->get_all_matakuliah();
		$this->form_validation->set_rules('id_matakuliah','nama_matakuliah','required');
		$this->form_validation->set_rules('id_pengajar','nama_pengajar','required');
		if ($this->form_validation->run() == false){
			$this->load->view('admin/delete_matakuliah', $data);
			$this->session->set_flashdata('flash_add','failed');
		}else{
			if ($this->admin_model->delete_matakuliah()) {
				$this->session->set_flashdata('flash_add','success');
				// redirect('/create_matakuliah');
				// redirect('admin/create_matakuliah');
			}
			$this->load->view('admin/delete_matakuliah', $data);
			//$this->session->set_flashdata('flash','success');
		}
	}

	// public function input_materi() {
	// 	$this->load->view('Pengajar/input_materi');
	// }

	public function view_materi() {
		$data['data_matkul'] = $this->admin_model->get_matkul();
		$data['data_materi'] = $this->admin_model->get_materi();
		$this->load->view('Pengajar/view_materi', $data);
	}
	

	public function view_pengajar()
	{
		$data['judul'] = 'View Pengajar';
		$data['pengajar'] = $this->admin_model->getall_pengajar();
		$this->load->view('admin/view_pengajar',$data);
	}


	public function cari_idmatkul()
	{
		$id_matakuliah = $_POST["id_matakuliah"];
		$data = $this->admin_model->cari_idmatkul();
		$this->load->view('admin/edit_matakuliah',$data);
	}
}