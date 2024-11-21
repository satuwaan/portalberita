<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    // Load model in constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_agenda');
    }

    // Load the agenda view
    public function index()
    {
        $data['data'] = $this->m_agenda->get_all_agenda();
        $this->load->view('v_agenda', $data);
    }
}
?>
