<?php
class Matakuliah {
    // Properties
    public $nama_matakuliah;
    public $kode_matakuliah;

    // Methods
    public function __construct() {
        parent::__construct();
        $this->load->model('matakuliah_model');
        $this->load->model('materi_model');
    }  

    public function Create_Matakuliah($kode_matakuliah, $nama_matakuliah) {
        $this->M_Matakuliah->buatMatakuliah($kode_matakuliah, $nama_matakuliah)
        $this->V_CreateMatakuliah();
    }
    public function Edit_Matakuliah($nama_matakuliahbr, $kode_matakuliahbr) {
        $this->M_Matakuliah->buatMatakuliah($kode_matakuliahbr, $nama_matakuliahbr)
        $this->V_UbahMatakuliah();
    }

    public function Delete_Matakuliah($kode_matakuliah){
        $result = $this->M_Matakuliah->hapusMatakuliah($kode_matakuliah);
        $this->V_HapusMatakuliah();
    }
}
?>
