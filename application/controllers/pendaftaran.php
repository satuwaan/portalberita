<?php 
class pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');


    }

    function index()
    {
        $this->load->view('v_pendaftaran');


    }





}