<?php

class Mkos extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database('supadmin', TRUE);

	}

public function cek_login($tabel, $data){
		$q = $this->db->get_where($tabel, $data);
		return $q;
	}
	public function cek_login_sadmin($tabel, $data){
		$q = $this->db_sadmin->get_where($tabel, $data);
		return $q;
	}
	public function member_login($u, $p){
		$q = $this->db->get_where('login_member', array('username'=>$u, 'password'=>$p));
		return $q;
	}
	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}
	public function get_all_data_sadmin($tabel){
		$q=$this->db_sadmin->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}
	public function insert_sadmin($tabel, $data){
		$this->db_sadmin->insert($tabel, $data);
	}

	public function get_by_id($tabel, $nama){
		return $this->db->get_where($tabel, array('nama'=>$nama) );
	}
	public function get_byid($tabel, $id){
		return $this->db->get_where($tabel, array('id'=>$id) );
	}
	public function get_csid($tabel, $id){
		return $this->db->get_where($tabel, array('id_CS'=>$id) );
	}
	public function get_kamarid($tabel, $id){
		return $this->db->get_where($tabel, array('id_kamar'=>$id) );
	}
	public function get_by_user($tabel, $user){
		return $this->db->get_where($tabel, $user);
	}
	public function orderby($tabel){
		$this->db->from($tabel);
		$this->db->order_by('nama', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_member($id, $data){
		$this->db->where('id', $id);
		$this->db->update('data_member', $data);
	}
	public function update_cs($id, $data){
		$this->db->where('id_CS', $id);
		$this->db->update('cs', $data);
	}
	public function update_mitra($id, $data){
		$this->db_sadmin->where('id', $id);
		$this->db_sadmin->update('daftar_mitra', $data);
	}
	public function update_transaksi($id, $data){
		$this->db->where('id', $id);
		$this->db->update('transaksi', $data);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}
	public function delete_sadmin($tabel, $id, $val){
		$this->db_sadmin->delete($tabel, array($id => $val)); 
	}
	public function totalMember($tabel){
		$data = $this->db->get($tabel);
		if ($data ->num_rows()>0) {
			return $data->num_rows();
		}
		else{
			return 0;
		}
	}
	public function totalcs($tabel){
		$data = $this->db->get($tabel);
		if ($data ->num_rows()>0) {
			return $data->num_rows();
		}
		else{
			return 0;
		}
	}
	public function ubah_statuscs($id,$data){
		$this->db->where('id_CS', $id);
		$this->db->update('cs', $data);
	}
	public function ubah_transaksi($id,$data){
		$this->db->where('id', $id);
		$this->db->update('transaksi', $data);
	}
	public function get_member($tabel, $tabel1){
    $this->db->select('*');
    $this->db->from($tabel); 
    $this->db->join($tabel1,'data_member.id_kamar = kamar.id_kamar');        
    $query = $this->db->get(); 
    return $query;
}
public function transaksi_member($tabel, $tabel1, $id){
    $this->db->select('*');
    $this->db->from($tabel); 
    $this->db->join($tabel1,'transaksi.id_kamar = kamar.id_kamar'); 
	$this->db->where('nama', $id);   
    $query = $this->db->get(); 
    return $query;
}
public function transaksi($tabel, $tabel1){
    $this->db->select('*');
    $this->db->from($tabel); 
    $this->db->join($tabel1,'transaksi.id_kamar = kamar.id_kamar'); 
 
	$this->db->order_by('nama', 'asc');   
    $query = $this->db->get(); 
    return $query;
}
public function get_transaksi($tabel, $tabel1, $tabel2){
    $this->db->select('*');
    $this->db->from($tabel); 
    $this->db->join($tabel1,'bukti_bayar.id_member = transaksi.id');   
	$this->db->join($tabel2,'bukti_bayar.id_kamar = kamar.id_kamar');   
    $query = $this->db->get(); 
    return $query;
}
public function get_transaksi_member($tabel, $tabel1, $id){
    $this->db->select('*');
    $this->db->from($tabel); 
    $this->db->join($tabel1,'transaksi.id_kamar = kamar.id_kamar');    
	$this->db->where('id', $id);  
    $query = $this->db->get(); 
    return $query;
}
public function langganan($tabel, $tabel1, $tabel2){
	$this->db_sadmin->select('*');
    $this->db_sadmin->from($tabel); 
    $this->db_sadmin->join($tabel1,'berlangganan.id_mitra = daftar_mitra.id'); 
	$this->db_sadmin->join($tabel2,'berlangganan.id_langganan = Biaya_langganan.id_biaya');  
	$query = $this->db_sadmin->get(); 
    return $query;
}
public function daftar_mitra($tabel, $tabel1){
	$this->db_sadmin->select('*');
    $this->db_sadmin->from($tabel); 
    $this->db_sadmin->join($tabel1,'berlangganan.id_mitra = daftar_mitra.id');  
	$query = $this->db_sadmin->get(); 
    return $query;
}
}