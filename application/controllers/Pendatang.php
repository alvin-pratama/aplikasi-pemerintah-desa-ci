<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendatang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Pendatang_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['pendatang'] = $this->Pendatang_model->getAllPendatang(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/pendatang/data_pendatang', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Pendatang_model->hapusDataPendatang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Pendatang');
	}

	public function tambah() {
		$this->form_validation->set_rules('come_nik', 'Come_nik', 'required');
		$this->form_validation->set_rules('come_name', 'Come_name', 'required');
		$this->form_validation->set_rules('come_gender', 'Come_gender', 'required');
		$this->form_validation->set_rules('come_at', 'Come_at', 'required');
		$this->form_validation->set_rules('neighbourhood', 'Neighbourhood', 'required');
		$this->form_validation->set_rules('hamlet', 'Hamlet', 'required');
		$this->form_validation->set_rules('village', 'Village', 'required');
		$this->form_validation->set_rules('urban_village', 'Urban_village', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('regency', 'Regency', 'required');
		$this->form_validation->set_rules('whistleblower_nik', 'Whistleblower_nik', 'required');
		$this->form_validation->set_rules('whistleblower_name', 'Whistleblower_name', 'required');
		$this->form_validation->set_rules('reason', 'Reason', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/pendatang/tambah_pendatang');
			$this->load->view('templates/footer');
		
		} else {

			$this->Pendatang_model->tambahDataPendatang();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Pendatang');
		}
	}

	public function ubah($id) {
		$data['datang'] = $this->Pendatang_model->getPendatangById($id);

		$this->form_validation->set_rules('come_nik', 'Come_nik', 'required');
		$this->form_validation->set_rules('come_name', 'Come_name', 'required');
		$this->form_validation->set_rules('come_gender', 'Come_gender', 'required');
		$this->form_validation->set_rules('come_at', 'Come_at', 'required');
		$this->form_validation->set_rules('neighbourhood', 'Neighbourhood', 'required');
		$this->form_validation->set_rules('hamlet', 'Hamlet', 'required');
		$this->form_validation->set_rules('village', 'Village', 'required');
		$this->form_validation->set_rules('urban_village', 'Urban_village', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('regency', 'Regency', 'required');
		$this->form_validation->set_rules('whistleblower_nik', 'Whistleblower_nik', 'required');
		$this->form_validation->set_rules('whistleblower_name', 'Whistleblower_name', 'required');
		$this->form_validation->set_rules('reason', 'Reason', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/pendatang/ubah_pendatang', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Pendatang_model->UbahDataPendatang();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Pendatang');
		}
	}

	public function olahPendatang() {
		// $data['datang'] = $this->Pendatang_model->getAllPendatang();
		// var_dump($data);

		// $this->form_validation->set_rules('id', 'Id', 'required');

		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_datang');
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			// $datang = $this->input->post('id', true);
			// $data['datang'] = $this->Pendatang_model->getPendatangById($datang);

			// var_dump($data);

			$data['bulan'] = $this->input->post('bulan', true);
			$data['tahun'] = $this->input->post('tahun', true);

			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/laporan_datang', $data);
			// $this->load->view('templates/footer');
		}
	}
}