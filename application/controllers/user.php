<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "user"){
			redirect(base_url('welcome'));
		}
	}
	public function index()
	{
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->get_bea_log();
		$data['dt'] = $Dbea;

		$this->load->view('index_log',$data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
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

		$this->load->view('index_log',$data);
	}

	public function daftar($id){
		$this->load->model('bea_model');
		$Dbea = $this->bea_model->show_upd($id);
		$data['dt'] = $Dbea;
		$this->load->view('v_pendaftaran',$data);
	}

	public function store($id) {
		$nama = $this->session->userdata('namaU');
		$nim = $this->session->userdata('nama');
		$stp = "-";
		$namafile = $nim.$stp.$nama.$stp.$id;
		$config['upload_path'] = './assets/upload';
		$config['allowed_types'] = 'docx';
		$config['file_name'] = $namafile;
		$config['max_size'] = 0;

		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!$this->upload->do_upload('fileUpload')) {
			$this->session->set_flashdata('error', "File yang Anda Upload bukan file extensi docx!");
			redirect(base_url("user/daftar/$id"));
		} else {
			$doc = array(
				'dokumen' => $namafile,
				'nim' => $nim,
				'id' => $id
			);
			$this->load->model('bea_model');
			$this->bea_model->pendaftaran($doc);
			$this->session->set_flashdata('success', "Pendaftaran Beasiswa Anda Berhasil");
			redirect(base_url('user'));
		}
	}
	public function penerima_bea(){
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->penerima_bea();
		$data['dt'] = $Dbea;

		$this->load->view('v_penerima_bea_log',$data);
	}
	public function histori(){
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->histori_log();
		$data['dt'] = $Dbea;

		$this->load->view('v_histori_log',$data);
	}
}
