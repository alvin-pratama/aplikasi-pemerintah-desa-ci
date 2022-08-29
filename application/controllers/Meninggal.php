<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meninggal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Meninggal_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['meninggal'] = $this->Meninggal_model->getAllMeninggal(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/meninggal/data_meninggal', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Meninggal_model->hapusDataMeninggal($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Meninggal');
	}

	public function tambah() {
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('dead_at', 'Dead_at', 'required');
		$this->form_validation->set_rules('neighbourhood', 'Neighbourhood', 'required');
		$this->form_validation->set_rules('hamlet', 'Hamlet', 'required');
		$this->form_validation->set_rules('village', 'Village', 'required');
		$this->form_validation->set_rules('urban_village', 'Urban_village', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('regency', 'Regency', 'required');
		$this->form_validation->set_rules('reason', 'Reason', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/meninggal/tambah_meninggal');
			$this->load->view('templates/footer');
		
		} else {

			$this->Meninggal_model->tambahDataMeninggal();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Meninggal');
		}
	}

	public function ubah($id) {
		$data['meninggal'] = $this->Meninggal_model->getMeninggalById($id);
		
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('dead_at', 'Dead_at', 'required');
		$this->form_validation->set_rules('neighbourhood', 'Neighbourhood', 'required');
		$this->form_validation->set_rules('hamlet', 'Hamlet', 'required');
		$this->form_validation->set_rules('village', 'Village', 'required');
		$this->form_validation->set_rules('urban_village', 'Urban_village', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('regency', 'Regency', 'required');
		$this->form_validation->set_rules('reason', 'Reason', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/meninggal/ubah_meninggal', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Meninggal_model->ubahDataMeninggal();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Meninggal');
		}
	}

	public function olahMeninggal() {
		// $data['meninggal'] = $this->Meninggal_model->getAllMeninggal();
		// var_dump($data);

		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_meninggal');
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			$data['bulan'] = $this->input->post('bulan', true);
			$data['tahun'] = $this->input->post('tahun', true);

			// var_dump($data_bulan);
			// var_dump($data_tahun);
			// die;
			// $data['mendu'] = $this->Meninggal_model->getMeninggalById($meninggal);

			// var_dump($data);


			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/laporan_meninggal', $data);
			// $this->load->view('templates/footer');
		}
	}
}
