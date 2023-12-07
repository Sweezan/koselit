<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class super_admin extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->model('mkos');
		$this->db_sadmin = $this->load->database('supadmin', TRUE);
	}
    public function index(){
		$this->load->view('login/login_sadmin');
	}
	public function login_sadmin(){
		$this->load->model('mkos');

			$u = $this->input->post('username');
			$p = $this->input->post('password');

			$data = array(
				'username' => $u,
				'password' => $p
			);

			$cek = $this->mkos->cek_login_sadmin('super_admin', $data)->num_rows();

			if($cek == 1){
				$data_session = array(
					'username' => $u,
					'status' =>'login'
				);
				$this->session->set_userdata($data_session);
				redirect('super_admin/dashboard_sadmin');
			}else{
				redirect('super_admin');
			}
		}
	public function dashboard_sadmin(){
		if(empty($this->session->userdata('username'))){
			redirect('welcome');
		}
		$this->load->model('mkos');
		$data['mitra'] = $this->mkos->langganan('daftar_mitra', 'berlangganan', 'biaya_langganan')->result();
		$this->load->view('layout_sadmin/header');
		$this->load->view('layout_sadmin/menu');
		$this->load->view('dashboard_super_admin/daftar_mitra', $data);
		$this->load->view('layout_sadmin/footer');
	}
    public function berlangganan(){
		
        $data['langganan'] = $this->mkos->langganan('berlangganan', 'daftar_mitra', 'biaya_langganan')->result();
        $this->load->view('layout_sadmin/header');
		$this->load->view('layout_sadmin/menu');
		$this->load->view('dashboard_super_admin/langganan', $data);
		$this->load->view('layout_sadmin/footer');
    }
    public function off_akun($id){
        $data = array(
			'status' => 'OFF'
		);
		$this->mkos->update_mitra($id, $data);
		redirect('super_admin/dashboard_sadmin');
    }
    public function on_akun($id){
        $data = array(
			'status' => 'ON'
		);
		$this->mkos->update_mitra($id, $data);
		redirect('super_admin/dashboard_sadmin');
    }
    public function delete_langganan($id){
        $this->mkos->delete_sadmin('berlangganan', 'id_blgn', $id);
		redirect('super_admin/berlangganan');
    }
}