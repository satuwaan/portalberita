<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function getAllBerita() {
        return $this->db->get('tbl_tulisan'); // Ganti dengan nama tabel Anda
    }

    public function getBeritaById($id) {
        $this->db->where('tulisan_id', $id); // Pastikan ini sesuai dengan kolom ID di tabel
        $query = $this->db->get('tbl_tulisan');
        return $query->row();
    }
}
