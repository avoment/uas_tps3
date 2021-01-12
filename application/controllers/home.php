<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
	}

	
	public function index(){
		
		$this->load->view('admin/home');
	}
	
	public function data_masuk(){
		$data['tbl_cucian'] = $this->home_model->getAllUsers();
		$this->load->view('admin/datamasuk.php',$data);
	}
	public function data_sabun(){
		$data['t_sabun'] = $this->home_model->getAllUsers_a();
		$this->load->view('admin/datasabun.php', $data);
	}
	public function data_keuangan(){
		$data['t_uang'] = $this->home_model->getAllUsers_k();
		$this->load->view('admin/data_keuangan.php', $data);
	}
	public function data_jasa(){
		$data['tbl_jenis'] = $this->home_model->getAllUsers_j();
		$this->load->view('admin/datajasa.php', $data);
	}
	

	public function addnew(){
		$this->load->view('admin/f_masuk.php');
	}
	public function addsabun(){
		$this->load->view('admin/f_sabun.php');
	}
	public function addjasa(){
		$this->load->view('admin/f_jasa.php');
	}
	 

	public function insert(){
		$user['ID'] = $this->input->post('ID');
		$user['nama'] = $this->input->post('nama');
		$user['jenis'] = $this->input->post('jenis');
		$user['berat'] = $this->input->post('berat');
		$user['tanggal_ambil'] = $this->input->post('tanggal_ambil');
		$user['harga'] = $this->input->post('harga');

		$query = $this->home_model->insertcucian($user);

		if($query){
			$data['users'] = $this->home_model->getAllUsers();
		{
            redirect(site_url('home/datamasuk'));
        };
		}
	}
	

	
 	
 
    public function jenis ($id){
        $data=array('get_jenis'=> $this->home_model->get_option());  
 		$this->load->view('admin/f_masuk', $data);
    }


}
?>