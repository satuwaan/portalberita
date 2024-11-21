<?php
class M_program extends CI_Model {

    public function get_all_programs() {
        $query = $this->db->get('tbl_program'); // asumsikan tabel bernama 'tbl_program'
        return $query;
    }
	
    function simpan_program($program_keterangan,$program_link,$gambar){
		$hsl=$this->db->query("insert into tbl_program(program_gambar,program_keterangan,program_link) values ('$gambar','$program_keterangan','$program_link')");
		return $hsl;
	}

	function update_program($program_id,$program_keterangan,$program_link,$gambar){
		$hsl=$this->db->query("update tbl_program set program_keterangan='$program_keterangan',program_link='$program_link',program_gambar='$gambar' where program_id='$program_id'");
		return $hsl;
	}

  function update_program_tanpa_img($program_id,$program_keterangan,$program_link){
		$hsl=$this->db->query("update tbl_program set program_keterangan='$program_keterangan',program_link='$program_link' where program_id='$program_id'");
		return $hsl;
	}

	function hapus_program($kode){
		$hsl=$this->db->query("delete from tbl_program where program_id='$kode'");
		return $hsl;
	}
}
?>