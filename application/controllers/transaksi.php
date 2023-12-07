<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mkos');
	}
	public function index(){
		$data['transaksi']=$this->mkos->transaksi('transaksi', 'kamar')->result();
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('dashboardadmin/transaksi', $data);
		$this->load->view('layout/footer');
	}
	public function delete($id){

		$this->mkos->delete('transaksi', 'id', $id);
		redirect('transaksi');
	}
	public function tambah_transaksi(){
		$data['transaksi']=$this->mkos->get_all_data('data_member')->result();
		$data['kamar']=$this->mkos->get_all_data('kamar')->result();
		$data['member']=$this->mkos->get_all_data('login_member')->result();
		$this->load->view('form/tambah_transaksi', $data);
	}
	public function simpan_transaksi(){
		$tgl = $this->input->post('tanggal');
		$nama = $this->input->post('nama');
		$id_kamar = $this->input->post('tika');
		$pembayaran = $this->input->post('pembayaran');


		$dataInput=array(	'Tanggal'		=> $tgl,
							'nama'	=> $nama,
							' pembayaran'	=> $pembayaran,
							' id_kamar'	=> $id_kamar
						);
		$this->mkos->insert('transaksi', $dataInput);
		redirect('transaksi');
	}
	public function edit_transaksi($id){
		$data['transaksi']=$this->mkos->get_transaksi('transaksi','kamar', $id)->result();
		$data['kamar']=$this->mkos->get_all_data('kamar')->result();
		$this->load->view('form_edit/edit_transaksi', $data);
	}
	public function simpan_edit_transaksi(){
		$id = $this->input->post('id');
		$tgl = $this->input->post('tanggal');
		$nama = $this->input->post('nama');
		$id_kamar = $this->input->post('tika');
		$pembayaran = $this->input->post('pembayaran');


		$dataInput=array(	'Tanggal'		=> $tgl,
							'nama'	=> $nama,
							' pembayaran'	=> $pembayaran,
							' id_kamar'	=> $id_kamar
						);
		$this->mkos->update_transaksi($id, $dataInput);
		redirect('transaksi');
	}
	public function selesai($id){
		$data = array(
			'pembayaran' => 'Sudah Bayar'
		);
		$this->mkos->ubah_transaksi($id, $data);
		redirect('transaksi');
	}

	
	
}