<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') == "user"){
			redirect(base_url('user'));
		}elseif ($this->session->userdata('status') == "admin"){
			redirect(base_url('admin'));
		}
	}

	public function index(){
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->get_bea();
		$data['dt'] = $Dbea;

		$this->load->view('index',$data);
	}

	public function create_login(){
		$this->load->view('v_login');
	}

	public function login(){
		$this->load->model('Bea_model');
		$username = $this->input->post('nim');
		$password = $this->input->post('pwd');
		$where = array(
			'nim' => $username,
			'password' => $password
		);
		$cek = $this->Bea_model->cek_db("user",$where)->num_rows();
		foreach ($this->Bea_model->cek_db("user",$where)->result_array() as $dt){
			$level = $dt['level'];
			$namaU = $dt['nama'];
		}
		if($cek > 0){
			if($level==1){
				$data_session = array(
					'nama' => $username,
					'namaU' => $namaU,
					'status' => "user"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('user'));
			}elseif($level==2){
				$data_session = array(
					'nama' => $username,
					'namaU' => $namaU,
					'status' => "admin"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('admin'));
			}

		}else{
			$this->session->set_flashdata('warning', "Username dan Password yang Anda Masukkan Salah !");
			redirect(base_url('Welcome/create_login/'));
		}
	}
	public function sign_up_adminBEBE(){
		$this->load->view('v_signup');
	}

	public function signup(){
		$pkodeunik = $this->input->post('kodeunik');
		$kodeunik ="QWERTY";
		if($pkodeunik != $kodeunik){
			$this->session->set_flashdata('warning', "Kode unik yang anda Masukkan salah. jika anda tidak punya kode unik silahkan minta ke bagian Akademik.");
			redirect(base_url('Welcome/sign_up_adminBEBE'));
		}else{
			$usr = $this->input->post('username');
			$pwd = $this->input->post('password');
			$nama = $this->input->post('nama');
			$this->load->model('Bea_model');
			$this->db->where('user', $usr);
			$this->db->from('user');
			$count = $this->Bea_model->cekusr($usr)->num_rows();
			if($count==0){
				$this->Bea_model->sign($nama,$usr,$pwd);
				$this->session->set_flashdata('success', "Pendaftaran Admin Sukses, Silahkan Login.");
				redirect(base_url('Welcome/create_login'));
			}else{
				$this->session->set_flashdata('warning', "Username sudah pernah dipakai sebelumnya. ");
				redirect(base_url('Welcome/sign_up_adminBEBE'));
			}
		}
	}

	public function cat($selected){
		$this->load->model('bea_model');
		if ($selected == "ALL"){
			$Dbea = $this->bea_model->get_bea();
		}elseif(substr($selected,0,2)=="JB"){
			$Dbea = $this->bea_model->get_JB(substr($selected,2));
		}else{
			$Dbea = $this->bea_model->get_FK(substr($selected,2));
		}

		$data['dt'] = $Dbea;

		$this->load->view('index',$data);
	}
}
