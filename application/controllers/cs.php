<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CS extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mkos');
	}
	public function index(){
		$nama = $this->session->userdata('username');
		$data['cs']=$this->mkos->get_by_user('cs',array('nama'=>$nama))->result();
		$this->load->view('layout_member/header');
		$this->load->view('layout_member/menu');
		$this->load->view('dashboard_member/cs', $data);
		$this->load->view('layout/footer');
	}
	public function daftar_cs(){
		$data['cs']=$this->mkos->orderby('cs');
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('dashboardadmin/daftar_cs', $data);
		$this->load->view('layout/footer');
	}
	public function delete($id){

		$this->mkos->delete('cs', 'id_CS', $id);
		redirect('cs');
	}
	public function tambah_cs(){
		$user = $this->session->userdata('username');
		$data['datauser'] = $this->mkos->get_by_user('login_member', 'username', $user)->result();
		$this->load->view('form/tambah_cs', $data);
	}
	public function simpan_cs(){
		$nama = $this->input->post('nama');
		$ket = $this->input->post('keterangan');
		$stat = $this->input->post('status');


		$dataInput=array(	'nama'		=> $nama,
							'keterangan'	=> $ket,
							'status'	=> $stat
						);
		$this->mkos->insert('cs', $dataInput);
		redirect('cs');
	}
	public function edit_cs($id){
		$data['cs']=$this->mkos->get_csid('cs', $id)->result();
		$this->load->view('form_edit/edit_cs',$data);

	}
	public function simpanedit_cs(){
		
		$id = $this->input->post('id');
		$name = $this->input->post('nama');
		$ket = $this->input->post('ket');
		$stat = $this->input->post('status');


		$dataUpdate = array(	
			'nama'		=> $name,
			'keterangan'	=> $ket,
			'status'	=> $stat
						);
		$this->mkos->update_cs($id, $dataUpdate);
		redirect('cs');
	}
	public function ubah_status($id){
		$data = array(
			'status' => 'Selesai'
		);
		$this->mkos->ubah_statuscs($id, $data);
		redirect('cs/daftar_cs');
	}

	
	
}