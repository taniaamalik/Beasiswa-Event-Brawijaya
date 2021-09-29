<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bea_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
    public function get_bea() {
    $query = $this->db->get('data_beasiswa');
    return $query->result();
    }
    public function get_bea_log(){
		$nim = strtoupper($this->session->userdata('nama'));
		$data = $this->db->query("SELECT * FROM data_beasiswa WHERE not id IN (SELECT id FROM pendaftar_beasiswa WHERE nim='$nim')");
		return $data->result();
	}
    
    public function sign($nama, $user, $pwd) {
    	return $this->db->query("INSERT INTO user (nama, nim, password, level ) VALUES ('$nama', '$user', '$pwd', '2')");
    }

    public function cekusr($usr){
		return $this->db->query("SELECT nim FROM user WHERE nim ='$usr'");
	}

	function cek_db($table,$where){
		return $this->db->get_where($table,$where);
	}

	function  cek_leve(){
		$data = $this->db->query("SELECT * FROM mahasiswa");
	}
	function show_upd($id)
	{
		$query = $this->db->get_where('data_beasiswa', array('id' => $id));
		return $query->result();
	}

	function update($id,$nama,$jenis,$fakultas,$jangka,$deskripsi){
		$this->db->query("UPDATE data_beasiswa SET nama_bea='$nama', jenis_bea='$jenis', fak_bea='$fakultas', jangka_bea='$jangka', deskripsi='$deskripsi' WHERE id='$id'");
		$this->db->query("UPDATE riwayat_data_beasiswa SET nama_bea='$nama', jenis_bea='$jenis', fak_bea='$fakultas', jangka_bea='$jangka', deskripsi='$deskripsi' WHERE id='$id'");
	}

	function delete($id){
		$this->db->query("DELETE FROM data_beasiswa WHERE id='$id'");
	}
	function add($nama,$jenis,$fakultas,$jangka,$deskripsi){
		$this->db->query("INSERT INTO data_beasiswa (nama_bea, jenis_bea, fak_bea, jangka_bea, deskripsi) VALUES ('$nama','$jenis','$fakultas','$jangka','$deskripsi')");
		$this->db->query("INSERT INTO riwayat_data_beasiswa (nama_bea, jenis_bea, fak_bea, jangka_bea, deskripsi) VALUES ('$nama','$jenis','$fakultas','$jangka','$deskripsi')");
	}
	function get_JB($selected){
		$data = $this->db->query("SELECT * FROM data_beasiswa WHERE Jenis_bea='$selected'");
		return $data->result();
	}
	function get_FK($selected){
		$data = $this->db->query("SELECT * FROM data_beasiswa WHERE Fak_bea='$selected'");
		return $data->result();
	}
	function pendaftaran ($data){
		$this->db->insert('pendaftar_beasiswa',$data);
	}
	function data_pendaftar(){
		$data = $this->db->query("SELECT id_pendaftaran, us.nim, nama, nama_bea, Fak_bea, Jenis_bea, dokumen, status FROM data_beasiswa db JOIN pendaftar_beasiswa pb JOIN user us ON pb.id = db.id AND pb.nim = us.nim");
		return $data->result();
	}
	function accept($id){
		return $this->db->query("UPDATE pendaftar_beasiswa SET status='Diterima' WHERE id_pendaftaran='$id'");
	}
	function penerima_bea(){
		$data = $this->db->query("SELECT us.nim, nama, nama_bea, Fak_bea, Jenis_bea, status FROM data_beasiswa db JOIN pendaftar_beasiswa pb JOIN user us ON pb.id = db.id AND pb.nim = us.nim WHERE pb.status='Diterima'");
		return $data->result();
	}
	function histori(){
		$query = $this->db->get('riwayat_data_beasiswa');
		return $query->result();
	}
	function histori_log(){
		$nim = strtoupper($this->session->userdata('nama'));
		$query = $this->db->query("SELECT * FROM riwayat_data_beasiswa WHERE id IN (SELECT id FROM pendaftar_beasiswa WHERE nim IN(SELECT nim FROM user WHERE nim='$nim'))");
		return $query->result();
	}
}
?>
