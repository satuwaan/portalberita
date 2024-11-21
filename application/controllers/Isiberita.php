<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isiberita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model'); // Pastikan model ini ada
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
    }

    public function index() {
        // Menampilkan daftar berita
        $data['data'] = $this->Berita_model->getAllBerita();
        $this->load->view('v_isiberita', $data); // Ganti dengan view Anda
		$x['album']=$this->m_album->get_all_album();
    }

    public function detail($id) {
        // Menampilkan detail berita berdasarkan ID
        $data['berita'] = $this->Berita_model->getBeritaById($id);
        
        if (!$data['berita']) {
            show_404(); // Jika berita tidak ditemukan
        }

        $this->load->view('v_isiberita', $data); // Ganti dengan view detail Anda
    }
}
