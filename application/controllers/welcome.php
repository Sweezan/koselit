<?php

class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mkos');
		$this->load->model('ctabel');
		$this->db_sadmin = $this->load->database('supadmin', TRUE);
		$this->load->dbforge();
		
	}
	public function index(){
		$this->load->view('Home');
	}
	public function login(){
		$this->load->view('pilih_login');
	}
	public function login_admin(){
		$this->load->view('login/login');
	}
	public function login_cs(){
		$this->load->view('login/login_cs');
	}

		
	
	public function logindashboard_admin(){

		$this->load->library('form_validation');

		
			$u = $this->input->post('username');
			$p = $this->input->post('password');

			$data = array(
				'username' => $u,
				'password' => $p,
				'status'=> 'ON'
			);

			$cek = $this->mkos->cek_login_sadmin('daftar_mitra', $data)->num_rows();
				if($cek == 1){
					$data_session = array (
						'username' => $u,
						'status' => 'login'
					);
					
					$this->session->set_userdata($data_session);
					redirect('welcome/dashboard_admin');
				}else{
					$respon = array(
						'msg' =>'alert'
					);
					redirect('welcome/login_admin');
				}
			
}	

	public function dashboard_admin(){
		if(empty($this->session->userdata('username'))){
			redirect('welcome');
		}
		$this->load->model('mkos');
		$data['login']=$this->mkos->get_all_data_sadmin('daftar_mitra')->result();
		$data1['totmem']=$this->mkos->totalMember('data_member');
		$data1['totcs']= $this->mkos->totalcs('cs');
		$data1['tottr']= $this->mkos->totalcs('transaksi');
		$this->load->view('layout/header');
		$this->load->view('layout/menu', $data);
		$this->load->view('dashboard/admin', $data1);
		$this->load->view('layout/footer');
	}
	public function logindashboard_member(){
		$this->load->model('mkos');
		$this->load->library('form_validation');
		$this->load->library('session');
		

		
			$u = $this->input->post('username');
			$p = $this->input->post('password');

			$cek = $this->mkos->member_login($u, $p)->num_rows();
				if($cek == 1){
					$data_session = array (
						'id'	=> NULL,
						'username' => $u,
						'status' => 'login'
					);
					
					$this->session->set_userdata($data_session);
					redirect('welcome/dashboard_member');
				}else{

					redirect('welcome/login_cs');
				}
	}
	public function dashboard_member(){
		if(empty($this->session->userdata('username'))){
			redirect('welcome');
		}
		$this->load->library('session');
		$this->load->model('mkos');
		$data['transaksi']=$this->mkos->get_all_data('transaksi')->result();
		$data['totcs']= $this->mkos->totalcs('cs');
		$this->load->view('layout_member/header');
		$this->load->view('layout_member/menu', $data);
		$this->load->view('dashboard/member');
		$this->load->view('layout_member/footer');
	}
	public function daftar_mitra(){
		$this->load->view('form/daftar_mitra');
	}
	public function simpan_mitra(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$dataInput=array(	'username'	=> $user,
							'password'=> $pass,
							'status'	=> 'OFF'
						);
		$this->mkos->insert_sadmin('daftar_mitra', $dataInput);
		redirect('http://localhost/ci/');
	}

	public function bayar_langganan(){
		$data['user'] = $this->mkos->get_all_data_sadmin('daftar_mitra')->result();
		$data['langganan']= $this->mkos->get_all_data_sadmin('biaya_langganan')->result();
		$data['metode']= $this->mkos->get_all_data_sadmin('metode_pembayaran')->result();
		$this->load->view('form/langganan', $data);
	}
	public function simpan_langganan(){
			$user = $this->input->post('nama');
			$tgl = $this->input->post('tanggal');
			$waktu = $this->input->post('waktu');


				$config['upload_path'] = './bukti_pembayaran/';
				$config['allowed_types'] = 'jpg|png|jpeg';

				$this->load->library('upload', $config);
				if($this->upload->do_upload('bukti_pembayaran')){
					$bukti = $this->upload->data();
					$bukti = $bukti['file_name'];
					$data = array(
						'id_mitra' => $user,
						'tgl'	=> $tgl,
						'id_langganan' => $waktu,
						'bukti_pembayaran' => $bukti
					);
					$this->mkos->insert_sadmin('berlangganan', $data);
					redirect('http://localhost/ci/');
				}
				else{
					redirect('welcome/bayar_langganan');
				}
			
		}
	public function bukti_bayar(){
		$data['bukti'] = $this->mkos->get_transaksi('bukti_bayar', 'transaksi', 'kamar')->result();
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('dashboardadmin/bukti_bayar', $data);
		$this->load->view('layout/footer');
	}
	public function 	delete_bukti($id){
		$this->mkos->delete('bukti_bayar', 'id_byr', $id);
		redirect('welcome/bukti_bayar');
	}

	public function logout(){
		$this->session->sess_destroy();
	
		redirect('http://localhost/ci/');
	
	}
	


}