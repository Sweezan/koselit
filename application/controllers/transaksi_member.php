<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_member extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mkos');
	}
	public function index(){
		$id = $this->session->userdata('username');

		$data['transaksi']=$this->mkos->transaksi_member('transaksi','kamar',  $id)->result();
		$this->load->view('layout_member/header');
		$this->load->view('layout_member/menu');
		$this->load->view('dashboard_member/transaksi', $data);
		$this->load->view('layout/footer');
	}
	public function delete($id){

		$this->mkos->delete('transaksi', 'id', $id);
		redirect('transaksi');
	}
	public function tambah_transaksi(){
		$data['transaksi']=$this->mkos->get_all_data('data_member')->result();
		$data['kamar']=$this->mkos->get_all_data('kamar')->result();
		$this->load->view('form/tambah_transaksi', $data);
	}
	public function simpan_transaksi(){
		$tgl = $this->input->post('tanggal');
		$nama = $this->input->post('nama');
		$tipe_kamar = $this->input->post('tika');
		$pembayaran = $this->input->post('pembayaran');
		$total = $this->input->post('total');


		$dataInput=array(	'Tanggal'		=> $tgl,
							'nama'	=> $nama,
							' pembayaran'	=> $pembayaran,
							' total' => $total,
							' tipe'	=> $tipe_kamar
						);
		$this->mkos->insert('transaksi', $dataInput);
		redirect('transaksi');
	}

	
	
}