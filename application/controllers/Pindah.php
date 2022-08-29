<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pindah extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Pindah_model');
		$this->load->library('form_validation');
	}

	public function index() {
 
		$data['pindah'] = $this->Pindah_model->getAllPindah(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/pindah/data_pindah', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Pindah_model->hapusDataPindah($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Pindah');
	}

	public function tambah() {

		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('moved_at', 'Moved_at', 'required');
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
			$this->load->view('data/pindah/tambah_pindah');
			$this->load->view('templates/footer');
		
		} else {

			$this->Pindah_model->tambahDataPindah();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Pindah');
		}
	}

	public function ubah($id) {
		$data['pindah'] = $this->Pindah_model->getPindahById($id);

		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('moved_at', 'Moved_at', 'required');
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
			$this->load->view('data/pindah/ubah_pindah', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Pindah_model->ubahDataPindah();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Pindah');
		}
	}

	public function olahPindah() {
		// $data['pindah'] = $this->Pindah_model->getAllPindah();
		// var_dump($data);

		// $this->form_validation->set_rules('id', 'Id', 'required');

		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_pindah');
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			// $pindah = $this->input->post('id', true);
			// $data['pindah'] = $this->Pindah_model->getPindahById($pindah);

			// var_dump($data);

			$data['bulan'] = $this->input->post('bulan', true);
			$data['tahun'] = $this->input->post('tahun', true);

			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/laporan_pindah', $data);
			// $this->load->view('templates/footer');
		}
	}
}