<?php
class Materi extends CI_Controller {
  	// Properties
  	public $nama_materi;
  	public $kode_materi;

  	// Methods
	public function __construct()
	{
		parent::__construct();
		$this->load->model('materi_model');
	}  

	public function Create_Materi($kode_materi, $nama_materi) {
		$this->M_Materi->buatMateri($kode_materi, $nama_materi)
		$this->V_CreateMateri();
  	}

	public function Edit_Materi($nama_materibr, $kode_materibr) {
		$this->M_Materi->buatMateri($kode_materibr, $nama_materibr)
		$this->V_UbahMateri();
  	}

	public function Delete_Materi($kode_materi){
		$result = $this->M_Materi->hapusMateri($kode_materi);
		$this->V_HapusMateri();
	}

}
?>
