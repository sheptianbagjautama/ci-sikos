<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Front_User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');

	}

	public function index(){
		  $data['sql'] = $this->User_model->info_semua_kos();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/index',$data);
	}

	public function kos_putra(){
		  $data['sql'] = $this->User_model->info_kos_putra();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/putra',$data);
	}

	public function kos_putri(){
		  $data['sql'] = $this->User_model->info_kos_putri();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/putri',$data);
	}

	public function kos_campur(){
		  $data['sql'] = $this->User_model->info_kos_campur();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/campur',$data);
	}

	public function view_konten_kos($slug = ''){
		$this->load->helper('text');
		date_default_timezone_set('Asia/Jakarta');
		$data_kos = $this->User_model->getKos("where slug = '$slug'")->result_array();

		$data = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'id_user'			=>$data_kos[0]['id_user'],
			'deskripsi'			=>$data_kos[0]['deskripsi'],
			'alamat'			=>$data_kos[0]['alamat'],
			'slug'				=>$data_kos[0]['slug'],
			'date'				=>$data_kos[0]['date'],
			'time'				=>$data_kos[0]['time'],
			'kota'				=>$data_kos[0]['kota'],
			'no_hp'				=>$data_kos[0]['no_hp'],
			'fullname'			=>$data_kos[0]['fullname'],
			'harga'				=>$data_kos[0]['harga'],
			'tipe'				=>$data_kos[0]['tipe'],
			'image_header'		=>$data_kos[0]['image_header']
		);

			$this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/detail_kos',$data);
	}

	function cari()
    {
        $keyword    =   $this->input->post('keyword');
        $data['hasilcari']    =   $this->User_model->search($keyword);
        $this->load->view('user/header',$data);
		$this->load->view('user/menu');
		$this->load->view('footer');
        $this->load->view('user/pencarian',$data);
    }

}