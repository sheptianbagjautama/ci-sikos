<?php 
defined('BASEPATH') or exit ('No direct script direct allowed');

class User_model extends CI_Model{

	

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('security');
	}

	
	//Menampilkan seluruh daftar user yang ada di database (Hak akses untuk admin)
	function user(){
		return $this->db->query("select * from tb_user");
	}

	

	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//Menampilkan seluruh daftar user yang ada di database (Hak akses untuk admin)
	public function get_listuser(){
		$this->db->from('tb_user');
		$this->db->join('tb_role','tb_user.id_role = tb_role.id_role');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_listkos(){
		$this->db->select('*');
		$this->db->from('tbl_kos');
		$this->db->join('tb_user','tb_user.id_user = tbl_kos.id_user');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_listuser_pengguna($id){
		$this->db->from('tb_user');
		//$this->db->join('tb_role','tb_user.id_role = tb_role.id_role');
		$this->db->where('tb_user.id_user', $id);
		$query=$this->db->get();
		return $query->result();
	}

	function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}

	public function get_listrole(){
		$this->db->from('tb_role');
		$query=$this->db->get();
		return $query->result();
	}

	function insertdata($tabel, $data){
		return $this->db->insert($tabel,$data);
	}

	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function getKos($where= ''){
		return $this->db->query("select tbl_kos.*, tb_user.* FROM tbl_kos  JOIN
		tb_user ON tbl_kos.id_user=tb_user.id_user $where;");
	}

	function getJumlahKos($where= ''){
		return $this->db->query("select * from tbl_kos $where;");
	}

	


	function getJumlahUser($where= ''){
		return $this->db->query("select * from tb_user $where;");
	}


	public function info_kos($id) {
	    $this->db->select('tbl_kos.*, tb_user.id_user');
	    $this->db->from('tbl_kos');
	    $this->db->join('tb_user', 'tbl_kos.id_user = tb_user.id_user');
	    $this->db->where('tbl_kos.id_user', $id);
	    $sql = $this->db->get()->result();
	    return $sql;
  	}

  	public function info_user($id) {
	    $this->db->select('*');
	    $this->db->from('tb_user');
	    $this->db->where('id_user',$id);
	    $sql = $this->db->get()->result();
	    return $sql;
  	}


  public function info_user_pengguna($id) {
    $this->db->select('tb_user.*');
    $this->db->from('tb_user');
    $this->db->where('tb_user.id_user', $id);
    $sql = $this->db->get()->result();
    return $sql;
  }

  public function deldata($tabel,$where){
  	return $this->db->delete($tabel,$where);

  }

//UNTUK USER YANG TIDAK LOGIN//
  public function info_semua_kos() {
	    $this->db->select('tbl_kos.*, tb_user.id_user');
	    $this->db->from('tbl_kos');
	    $this->db->join('tb_user', 'tbl_kos.id_user = tb_user.id_user');
	    $this->db->where('tbl_kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  	}

  public function info_kos_putra() {
	    $this->db->select('tbl_kos.*, tb_user.id_user');
	    $this->db->from('tbl_kos');
	    $this->db->join('tb_user', 'tbl_kos.id_user = tb_user.id_user');
	    $this->db->where('tbl_kos.tipe = "Putra"');
	    $this->db->where('tbl_kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  }

  public function info_kos_putri() {
	    $this->db->select('tbl_kos.*, tb_user.id_user');
	    $this->db->from('tbl_kos');
	    $this->db->join('tb_user', 'tbl_kos.id_user = tb_user.id_user');
	    $this->db->where('tbl_kos.tipe = "Putri"');
	    $this->db->where('tbl_kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  }

  public function info_kos_campur() {
	    $this->db->select('tbl_kos.*, tb_user.id_user');
	    $this->db->from('tbl_kos');
	    $this->db->join('tb_user', 'tbl_kos.id_user = tb_user.id_user');
	    $this->db->where('tbl_kos.tipe = "Campur"');
	    $this->db->where('tbl_kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  }

  function search($keyword)
    {
        $this->db->like('nama',$keyword);
        $query  =   $this->db->get('tbl_kos');
        return $query->result();
    }


}