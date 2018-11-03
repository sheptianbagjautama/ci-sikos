<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  //Cek User
  public function cek_user($email,$pass){
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->where('email',$email);
    $this->db->where('password',$pass);
    $query = $this->db->get();
    return $query->result();
  }

}