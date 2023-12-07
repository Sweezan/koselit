<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mkos');
	}

	public function index(){
		$data['member']=$this->mkos->get_member('data_member','kamar')->result();
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('dashboardadmin/daftar_member', $data);
		$this->load->view('layout/footer');
	}
	public function delete($id){

		$this->mkos->delete('data_member', 'id', $id);
		redirect('member');
	}
	public function delete_akun($id){

		$this->mkos->delete('login_member', 'id', $id);
		redirect('member/daftar_akun_member');
	}
	public function tambah_member(){
		$data['kamar']=$this->mkos->get_all_data('kamar')->result();
		$this->load->view('form/tambah_member', $data);
	}
	public function simpan_member(){
		$nama = $this->input->post('nama');
		$tipe = $this->input->post('tipe');
		$nokamar = $this->input->post('nokamar');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');
		$nowali = $this->input->post('nowali');


		$dataInput=array(	'nama'		=> $nama,
							'id_kamar'=> $tipe,
							'no_kamar'	=> $nokamar,
							' no_hp'	=> $nohp,
							' alamat_asal' => $alamat,
							' no_wali'	=> $nowali
						);
		$this->mkos->insert('data_member', $dataInput);
		redirect('member');
	}
	public function edit_member($id){
		$data['member']=$this->mkos->get_byid('data_member', $id)->result();
		$data['kamar']=$this->mkos->get_all_data('kamar')->result();
		$this->load->view('form_edit/edit_member', $data);
	}
	public function simpanedit_member(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$tipe = $this->input->post('tipe');
		$nokamar = $this->input->post('nokamar');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');
		$nowali = $this->input->post('nowali');

		$dataUpdate = array(
			'nama' => $nama,
			'id_kamar' => $tipe,
			'no_kamar' =>$nokamar,
			'no_hp' =>$nohp,
			'alamat_asal' => $alamat,
			'no_wali' => $nowali
		);
		$this->mkos->update_member($id, $dataUpdate);
		redirect('member');
	}
	public function tambahakun_member(){
		$data['member'] = $this->mkos->get_all_data('data_member')->result();
		$this->load->view('form/tambah_akun_member', $data);
	}
	public function simpan_akun(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		$dataInput=array(	'username'	=> $username,
							'password'	=> $pass
						);
		$this->mkos->insert('login_member', $dataInput);
		redirect('welcome/dashboard_admin');
	}
	public function daftar_akun_member(){
		$data['member']=$this->mkos->get_all_data('login_member')->result();
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('dashboardadmin/daftar_akun_member', $data);
		$this->load->view('layout/footer');
	}
	public function bayar_member($id){
		$data['member'] = $this->mkos->get_transaksi_member('transaksi','kamar', $id)->result();
		$data['metod'] = $this->mkos->get_all_data('metode_pembayaran')->result();
		$this->load->view('form/transaksi_member', $data);
	}
	public function simpan_bayar_member(){
			$tgl = $this->input->post('tanggal');
			$user = $this->input->post('nama');
			$tika = $this->input->post('tika');


				$config['upload_path'] = './bukti_pembayaran/';
				$config['allowed_types'] = 'jpg|png|jpeg';

				$this->load->library('upload', $config);
				if($this->upload->do_upload('bukti_pembayaran')){
					$bukti = $this->upload->data();
					$bukti = $bukti['file_name'];
					$data = array(
						'tgl' => $tgl,
						'id_member'	=> $user,
						'id_kamar' => $tika,
						'bukti' => $bukti
					);
					$this->mkos->insert('bukti_bayar', $data);
					redirect('transaksi_member');
				}
				else{
					redirect('welcome/bayar_langganan');
				}
	}
	
}