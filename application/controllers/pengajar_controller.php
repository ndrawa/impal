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

	public function edit_materi()
	{
		$data['judul'] = 'Edit Materi';
		$this->form_validation->set_rules('id_materi','nama_materi','required');
		if ($this->form_validation->run() == false){
			$this->load->view('pengajar/edit_materi', $data);
			$this->session->set_flashdata('flash_add','Update failed');
		}else{
			$this->pengajar_model->edit_materi();
			$this->session->set_flashdata('flash_add','Update success');
			// redirect('/create_matakuliah');
			$this->load->view('pengajar/edit_materi', $data);
			echo $this->session->set_flashdata('flash','Update success');
			// redirect('admin/create_matakuliah');
		}
	}
	
	public function fetch_materi($kode_matkul) {

	}
	
	public function view_pengajar(){
		$data['judul'] = 'View Pengajar';
		$data['pengajar'] = $this->pengajar_model->getall_pengajar();
		$this->load->view('Pengajar/view_pengajar',$data);
	}

	public function delete_materi(){
		$data['judul'] = 'Delete Materi';
		$this->form_validation->set_rules('id_materi','nama_materi','required');
		if ($this->form_validation->run() == false){
			$this->load->view('pengajar/delete_materi', $data);
			$this->session->set_flashdata('flash_add','Delete failed');
		}else{
			$this->pengajar_model->delete_materi();
			$this->session->set_flashdata('flash_add','Delete success');
			// redirect('/create_matakuliah');
			$this->load->view('pengajar/delete_materi', $data);
			echo $this->session->set_flashdata('flash','Delete success');
			// redirect('admin/create_matakuliah');
		}
	}
	
}