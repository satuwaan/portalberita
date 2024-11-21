<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_agenda');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_agenda->get_all_agenda();
		$this->load->view('admin/v_dataagenda',$x);
	}
	
	function simpan_agenda(){
				
							$agenda_judul=strip_tags($this->input->post('xagenda_judul'));
							$agenda_data=strip_tags($this->input->post('xagenda_tanggal'));
                            $agenda_deskripsi=strip_tags($this->input->post('xagenda_deskripsi'));
							$kode=$this->session->userdata('idadmin');
							$this->m_agenda->simpan_agenda($agenda_judul,$agenda_data,$agenda_deskripsi);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/agenda');
				
	}
	
	function update_agenda(){
	                        $agenda_id=$this->input->post('kode');
	                        $agenda_judul=strip_tags($this->input->post('xagenda_judul'));
							$agenda_data=strip_tags($this->input->post('xagenda_tanggal'));
                            $agenda_deskripsi=strip_tags($this->input->post('xagenda_deskripsi'));
							$kode=$this->session->userdata('idadmin');
							$this->m_agenda->update_agenda($agenda_id,$agenda_judul,$agenda_data,$agenda_deskripsi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/agenda');
	}

	function hapus_agenda(){
		$kode=$this->input->post('kode');
		$this->m_agenda->hapus_agenda($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/agenda');
	}

}