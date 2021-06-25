<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
        // $this->load->model('admin_model');
        // $this->load->model('pengajar_model')
	}

	public function index()
	{
		$this->load->view('login/index');
	}

	function auth(){
        if ($this->session->userdata('session_username') != null) {
            $username=$this->session->userdata('session_username');
            $password=$this->session->userdata('session_password');
        }else {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
        }
        $cek_pelajar=$this->Login_Model->auth_pelajar($username,$password);        
        $cek_pengajar=$this->Login_Model->auth_pengajar($username,$password);
 
        if($this->session->userdata('session_login') == 'pelajar') {
            $data=$cek_pelajar->row_array();
            $this->load->view('pelajar/Pelajar_View',$data);
        } else if ($this->session->userdata('session_login') == 'pengajar') {
            $data=$cek_pengajar->row_array();
            $this->load->view('pengajar/Pengajar_View',$data);
        } else if ($this->session->userdata('session_login') == 'admin') {
            $this->load->view('admin/index');
        } else {
            if($username=='admin' && $password=='admin'){
                $this->session->set_userdata('session_login','admin');
                $this->load->view('admin/index');
            }else{
                if($cek_pelajar->num_rows() > 0){                       //jika login sebagai pelajar
                    $data=$cek_pelajar->row_array();
                    $this->session->set_userdata('session_login','pelajar');
                    $this->session->set_userdata('session_nama',$data['nama']);
                    $this->session->set_userdata('session_username',$data['email']);
                    $this->session->set_userdata('session_password',$data['password']);
                    $this->session->set_userdata('session_status','pelajar');
                    $this->load->view('pelajar/pelajar_view', $data);
                }else if($cek_pengajar->num_rows() > 0){                //jika login sebagai pengajar
                    $data=$cek_pengajar->row_array();
                    $this->session->set_userdata('session_login','pengajar');
                    $this->session->set_userdata('session_nama',$data['nama']);
                    $this->session->set_userdata('session_username',$data['email']);
                    $this->session->set_userdata('session_status','pengajar');
                    $this->session->set_userdata('session_kode',$data['kode_pengajar']);
                    $this->load->view('pengajar/pengajar_view', $data);
                }else{  // jika username dan password tidak ditemukan atau salah
                    $url=base_url();
                    echo $this->session->set_flashdata('message','Username or Password incorrect.');
                    redirect($url);
                }
            } 
        }
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}