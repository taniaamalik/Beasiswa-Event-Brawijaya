<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "admin"){
			redirect(base_url('welcome'));
		}
	}
	public function index()
	{
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->get_bea();
		$data['dt'] = $Dbea;

		$this->load->view('index_admin',$data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function show_update($id){
		$this->load->model('bea_model');
		$dataupd = $this->bea_model->show_upd($id);
		$data['dd'] = $dataupd;
		$this->load->view('v_edit',$data);
	}
	function update(){
		$id=$this->input->post('id_bea');
		$nama=$this->input->post('nama_bea');
		$jenis=$this->input->post('jenis');
		$fakultas=$this->input->post('fak');
		$jangka=$this->input->post('jangka');
		$deskripsi=$this->input->post('deskripsi');
		$this->load->model('bea_model');
		$this->bea_model->update($id,$nama,$jenis,$fakultas,$jangka,$deskripsi);
		redirect(base_url());
	}

	function del($id){
		$this->load->model('bea_model');
		$this->bea_model->delete($id);
		redirect(base_url());
	}
	function show_add(){
		$this->load->view('v_add');
	}

	function add(){
		$id=$this->input->post('id_bea');
		$nama=$this->input->post('nama_bea');
		$jenis=$this->input->post('jenis');
		$fakultas=$this->input->post('fak');
		$jangka=$this->input->post('jangka');
		$deskripsi=$this->input->post('deskripsi');
		$this->load->model('bea_model');
		$this->bea_model->add($nama,$jenis,$fakultas,$jangka,$deskripsi);
		$this->session->set_flashdata('success', "Penambahan ID sebagai Penerima Beasiswa Sukses");
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

		$this->load->view('index_admin',$data);
	}
	public function data_pendaftar()
	{
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->data_pendaftar();
		$data['dt'] = $Dbea;

		$this->load->view('v_data_pendaftar',$data);
	}
	public function accept($id){
		$this->load->model('bea_model');
		$result = $this->bea_model->accept($id);
		if($result == 1){
			$this->session->set_flashdata('success', "Penambahan ID $id sebagai Penerima Beasiswa Sukses");
		}else{
			$this->session->set_flashdata('error', "Terjadi Kesalahan Koneksi Database.");
		}
		redirect(base_url('admin/data_pendaftar'));
	}
	public function penerima_bea(){
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->penerima_bea();
		$data['dt'] = $Dbea;

		$this->load->view('v_penerima_bea',$data);
	}
	public function histori(){
		$this->load->model('bea_model');

		$Dbea = $this->bea_model->histori();
		$data['dt'] = $Dbea;

		$this->load->view('v_histori',$data);
	}
}
