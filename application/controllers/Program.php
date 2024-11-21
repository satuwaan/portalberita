<?php
class Program extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_program'); // Load model yang kita buat
    }

    public function index() {
        $data['programs'] = $this->m_program->get_all_programs(); // Ambil semua data program dari model
        $this->load->view('v_program', $data); // Load view dan kirim data
        
    }
}
?>
