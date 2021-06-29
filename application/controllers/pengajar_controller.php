<?php
class pengajar_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajar_model');
		$this->load->library('form_validation');
		$this->load->library('user_agent');
	}

	public function input_materi() {
		$pengajar = $this->session->userdata('session_kode');
		$data['data_matkul'] = $this->pengajar_model->get_matkul($pengajar);
			$config['upload_path']		= FCPATH.'\upload';
			$config['allowed_types']    = 'docx|pdf|pptx|txt|doc';
			$config['max_size']			= 1024;
			$this->load->library('upload', $config);
			if ( $this->upload->do_upload('file_materi')){
				$file_materi = $this->upload->data('file_name');
				$this->pengajar_model->create_materi($file_materi);
				$this->session->set_flashdata('flash_add','success');
				$this->load->view('Pengajar/input_materi',$data);
			}else{
				$this->load->view('Pengajar/input_materi', $data);
				$this->session->set_flashdata('flash_add','failed');
			}
		}
	//}

	public function view_materi() {
		$pengajar = $this->session->userdata('session_kode');
		$data['data_matkul'] = $this->pengajar_model->get_matkul($pengajar);
		$data['data_materi'] = $this->pengajar_model->get_materi($pengajar);
		$this->load->view('Pengajar/view_materi', $data);
	}

	public function edit_materi($data)
	{
		$config['upload_path']		= FCPATH.'\upload';
		$config['allowed_types']    = 'docx|pdf|pptx|txt|doc';
		$config['max_size']			= 1024;
		$this->load->library('upload', $config);
		$this->form_validation->set_rules('id_materi','nama_materi','required');
		if ($this->form_validation->run() == true){
			$file_materi = $this->upload->data('file_name');
			$this->pengajar_model->edit_materi($file_materi);
			//$this->session->set_flashdata('flash_add','success');
			$this->view_materi();
		}else{
			$this->load->view('Pengajar/edit_materi', $data);
			//$this->session->set_flashdata('flash_add','failed');
		}
	}
	
	public function edit($id = null){
		 $data['matkul'] = $this->pengajar_model->get_materi_by_id();
			//  echo $data['matkul']['kode_matakuliah'];
		 return $this->edit_materi($data);
	}

	public function view_pengajar(){
		$data['judul'] = 'View Pengajar';
		$data['pengajar'] = $this->pengajar_model->getall_pengajar();
		$this->load->view('Pengajar/view_pengajar',$data);
	}

	public function delete($id = null){
	     $data['materi'] = $this->pengajar_model->get_materi_by_id();
	     return $this->delete_materi($data);
 	}

	public function delete_materi($data){
		$data['data_materi'] = $this->pengajar_model->get_materi_by_id();
		$this->form_validation->set_rules('id_materi','nama_materi','required');
		if ($this->form_validation->run() == false){
			$this->load->view('pengajar/delete_materi', $data);
			$this->session->set_flashdata('flash_add','failed');
		}else{
			$this->pengajar_model->delete_materi();
			$this->view_materi();
			// $this->session->set_flashdata('flash_add','success');
			// $this->load->view('pengajar/delete_materi', $data);
			// $this->session->set_flashdata('flash','success');
		}
	}
}