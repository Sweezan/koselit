<?php

class Ctabel extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database('supadmin', TRUE);
        $this->load->dbforge();
	}

    public function data_member($tabel, $db){
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' =>TRUE
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' =>TRUE
            ),
            'id_kamar' => array(
                'type' => 'INT',
                'constraint' => 2,

            ),
            'no_kamar' => array(
                'type' => 'VARCHAR',
                'constraint' => '3'

            ),
            'no_hp' => array(
                'type' => 'CHAR',
                'constraint' => '15'

            ),
            'alamat_asal' => array(
                'type' => 'VARCHAR',
                'constraint' => '150'
            ),
            'no_wali' => array(
                'type' => 'CHAR',
                'constraint' => '15'
            ),
        ));
        $this->dbforge->create_table($tabel);
        $this->dbforge->where($db);
    }

}