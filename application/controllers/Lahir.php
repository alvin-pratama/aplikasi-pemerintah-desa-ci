<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahir extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Lahir_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['lahir'] = $this->Lahir_model->getAllLahir(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/lahir/data_lahir', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Lahir_model->hapusDataLahir($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Lahir');
	}

	public function tambah() {
			
		$this->form_validation->set_rules('kk', 'Kk', 'required');
		$this->form_validation->set_rules('baby_nik', 'Baby_nik', 'required');
		$this->form_validation->set_rules('baby_name', 'Baby_name', 'required');
		$this->form_validation->set_rules('baby_gender', 'Baby_gender', 'required');
		$this->form_validation->set_rules('borned_at', 'Borned_at', 'required');
		$this->form_validation->set_rules('mother_name', 'Mother_name', 'required');
		$this->form_validation->set_rules('neighbourhood', 'Neighbourhood', 'required');
		$this->form_validation->set_rules('hamlet', 'Hamlet', 'required');
		$this->form_validation->set_rules('village', 'Village', 'required');
		$this->form_validation->set_rules('urban_village', 'Urban_village', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('regency', 'Regency', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/lahir/tambah_lahir');
			$this->load->view('templates/footer');
		
		} else {

			$this->Lahir_model->tambahDataLahir();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Lahir');
		}
	}

	public function ubah($id) {
		$data['lahir'] = $this->Lahir_model->getLahirById($id);

		$this->form_validation->set_rules('kk', 'Kk', 'required');
		$this->form_validation->set_rules('baby_nik', 'Baby_nik', 'required');
		$this->form_validation->set_rules('baby_name', 'Baby_name', 'required');
		$this->form_validation->set_rules('baby_gender', 'Baby_gender', 'required');
		$this->form_validation->set_rules('borned_at', 'Borned_at', 'required');
		$this->form_validation->set_rules('mother_name', 'Mother_name', 'required');
		$this->form_validation->set_rules('neighbourhood', 'Neighbourhood', 'required');
		$this->form_validation->set_rules('hamlet', 'Hamlet', 'required');
		$this->form_validation->set_rules('village', 'Village', 'required');
		$this->form_validation->set_rules('urban_village', 'Urban_village', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('regency', 'Regency', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/lahir/ubah_lahir', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Lahir_model->ubahDataLahir();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Lahir');
		}
	}

	public function olahLahir() {
		// $data['lahir'] = $this->Lahir_model->getAllLahir();
		// var_dump($data);

		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_lahir');
			$this->load->view('templates/footer');

		} else {

			$data['bulan'] = $this->input->post('bulan', true);
			$data['tahun'] = $this->input->post('tahun', true);

			$this->load->view('report/laporan_lahir', $data);
		}
	}
}