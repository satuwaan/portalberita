<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_agenda extends CI_Model
{
    // Constructor for loading the database
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }

    // Get all agenda items
    // public function get_all_agenda()
    // {
    //     return $this->db->get('tbl_agenda')->result();
    // }

    public function get_all_agenda() {
        $query = $this->db->get('tbl_agenda'); // asumsikan tabel bernama 'tbl_agenda'
        return $query;
    }

    function simpan_agenda($agenda_judul,$agenda_data,$agenda_deskripsi){
		$hsl=$this->db->query("insert into tbl_agenda(agenda_judul,agenda_data,agenda_deskripsi) values ('$agenda_judul','$agenda_data','$agenda_deskripsi')");
		return $hsl;
	}

    function update_agenda($agenda_id,$agenda_judul,$agenda_data,$agenda_deskripsi){
		$hsl=$this->db->query("update tbl_agenda set agenda_judul='$agenda_judul',agenda_data='$agenda_data',agenda_deskripsi='$agenda_deskripsi' where agenda_id='$agenda_id'");
		return $hsl;
	}

    function hapus_agenda($kode){
		$hsl=$this->db->query("delete from tbl_agenda where agenda_id='$kode'");
		return $hsl;
	}
    
}
?>
