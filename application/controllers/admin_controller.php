<?php
class admin_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}
       
        
	public function index()
	{
		$data['judul'] = 'Selamat datang Dokter';
		$data['jadwal_kosong'] = $this->M_Dokter->getAllJadwalKosong();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->M_Dokter->cariJadwalKosong();
		}
		$this->load->view('template/navbar', $data);
		$this->load->view('dokter/V_UtamaDokter', $data);
		$this->load->view('template/footer');
	}

	//======================================C untuk menampilkan view========================================
	
	public function create_matakuliah()
	{
		$data['judul'] = 'Form Tambah Matakuliah';
		$this->form_validation->set_rules('id_matakuliah','nama_matakuliah','required');
		$this->form_validation->set_rules('id_pengajar','nama_pengajar','required');
		if ($this->form_validation->run() == false){
			$this->load->view('admin/create_matakuliah', $data);
			$this->session->set_flashdata('flash_add','added failed');
		}else{
			$this->admin_model->create_matakuliah();
			$this->session->set_flashdata('flash_add','added success');
			// redirect('/create_matakuliah');
			$this->load->view('admin/create_matakuliah', $data);
			echo $this->session->set_flashdata('flash','added success');
			echo $this->session->set_flashdata('flash','added failed');
		}
	}

	public view_matakuliah()
	{
		$this->load->view('admin/view_matakuliah');
	}

	public function edit_matakuliah()
	{
		$data['judul'] = 'Edit Matakuliah';
		$this->form_validation->set_rules('id_matakuliah','nama_matakuliah','required');
		$this->form_validation->set_rules('id_pengajar','nama_pengajar','required');
		if ($this->form_validation->run() == false){
			$this->load->view('admin/edit_matakuliah', $data);
			$this->session->set_flashdata('flash_add','added failed');
		}else{
			$this->admin_model->edit_matakuliah();
			$this->session->set_flashdata('flash_add','added success');
			// redirect('/create_matakuliah');
			$this->load->view('admin/edit_matakuliah', $data);
			echo $this->session->set_flashdata('flash','added success');
			// redirect('admin/create_matakuliah');
		}
	}

	public function cari_idmatkul()
	{
		$id_matakuliah = $_POST["id_matakuliah"];
		$data = $this->admin_model->cari_idmatkul();
		$this->load->view('admin/edit_matakuliah',$data);
	}

	public function V_Ubah(){
		$this->load->view('Dokter/V_ubah',);
	}

	public function V_lihatJadwalKosong()
	{
		$data['jadwal_kosong'] = $this->M_Dokter->getJadwalKosongByUsername();
		$this->load->view('Dokter/V_lihatJadwalKosong', $data);
	}
	
	public function V_hapus()
	{
		$this->load->view('Dokter/V_hapus',);
	}

	//======================================C untuk ke model========================================

	public function getData(){
		include 'connect.php';
		$id=$this->session->userdata('session_username');
    	$queryResult = mysqli_query($connect,"SELECT * FROM jadwal_kosong join dokter on (dokter.username = jadwal_kosong.Username_Dokter) WHERE Username_Dokter='$id' AND empty = 0");
		$result 	 = array();
		while($fethData=$queryResult->fetch_assoc()){
			$result[]=$fethData;
		}
		echo json_encode($result);
	}

	public function create()
    {
        $this->load->model('M_Dokter');
        $this->load->helper('form_helper');	
        $this->load->view('V_lihatJadwalKosong', $data);
    }

    //==================buat edit jadwal

    public function fetchData(){
		include 'connect.php';

		$idjadwal =$_POST["idjadwal"];
		$result = array();
		$queryResult = mysqli_query($connect,"SELECT * FROM jadwal_kosong WHERE idjadwal=".$idjadwal);
		$fetchData = $queryResult->fetch_assoc();

		$result=$fetchData;
		echo json_encode($result);
	}

	public function doUpdateData(){
		include 'connect.php';

		$result['message']=" ";
		$data = array(
			"idjadwal"	=> $this->input->post('idjadwal'),
			"jam" 		=> $this->input->post('jam'),
			"Tanggal" 	=> $this->input->post('Tanggal'),
		);

		if($data['jam']==""){
			$result["mesagge"]="Jam must be filled!";
		}else if($data['Tanggal']==""){
			$result["message"]="Tanggal must be filled!";
		}else{
			$queryResult = $this->M_Dokter->ubahJadwalKosong($data);
			if($queryResult){
				$result["message"]="SUCCESS!";
			}else{
				$result["message"]="FAILED!";
			}
		}
		echo json_encode($result);
	}

    //==================buat delete jadwal
    public function deleteData(){
		include 'connect.php';

		$result['message']=" ";
		$idjadwal =$_POST["idjadwal"];
		$result = array();
		$queryResult = mysqli_query($connect,"DELETE FROM jadwal_kosong WHERE idjadwal=".$idjadwal);
		if($queryResult){
				$result["message"]="Data Berhasil Di Hapus!";
			}else{
				$result["message"]="Data Gagal Di Hapus!";
			}
		echo json_encode($result);
	}
}