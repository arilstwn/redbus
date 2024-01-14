<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
      
	}

    public function dasboard()
    {
        $this->load->view('admin/dasboard');
    }  
    public function index()
    {
        $this->load->view('admin/index');
    }  
     /* ===== Kelas Bus ===== */
    public function kelas()
    {
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('admin/kelas', $data);
    }
  
	public function tambah_kelas()
	{
		$data['kelas']=$this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_kelas', $data);
	}
	
	public function aksi_tambah_kelas()
	{
		$data = [
			'kelas' => $this->input->post('kelas'),
			'jumlah_kursi' => $this->input->post('jumlah_kursi'),
			];
		$this->m_model->tambah_data('kelas', $data);
		redirect(base_url('admin/kelas'));
	}
    /* ===== Jadwal Keberangkatan ===== */
    public function jadwal()
    {
        $data['jadwal'] = $this->m_model->get_data('jadwal')->result();
        $this->load->view('admin/jadwal', $data);
    }

    public function tambah_jadwal()
	{
		$data['jadwal']=$this->m_model->get_data('jadwal')->result();
		$this->load->view('admin/tambah_jadwal', $data);
	}
	
	public function aksi_tambah_jadwal()
	{
		$data = [
			'tujuan' => $this->input->post('tujuan'),
			'jam' => $this->input->post('jam'),
			];
		$this->m_model->tambah_data('jadwal', $data);
		redirect(base_url('admin/jadwal'));
	}
    /* ===== Pesanan Tiket ===== */
    public function pesanan()
    {
        $data['pesanan'] = $this->m_model->get_data('pesanan')->result();
        $this->load->view('admin/pesanan', $data);
    }

    public function tambah_tiket()
	{
		$data['tiket']=$this->m_model->get_data('tiket')->result();
		$this->load->view('admin/tambah_tiket', $data);
	}
	
	public function aksi_tambah_tiket()
	{
		$data = [
			'nama_tiket' => $this->input->post('nama_tiket'),
			'kelas' => $this->input->post('kelas'),
			'tujuan' => $this->input->post('tujuan'),
			'harga' => $this->input->post('harga'),
			];
		$this->m_model->tambah_data('tiket', $data);
		redirect(base_url('admin/tiket'));
	}
    /* ===== Tiket ===== */
    public function tiket()
    {
        $data['tiket'] = $this->m_model->get_data('tiket')->result();
        $this->load->view('admin/tiket', $data);
    }
    /* ===== Akun Admin ===== */
    public function akun()
    {
        $this->load->view('admin/akun');
    }
  

}
