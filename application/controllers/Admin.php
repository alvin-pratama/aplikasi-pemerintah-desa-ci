<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		// jika user masuk ke url admin tanpa membawa session maka di kembalikan ke awal login
		
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		

		// diganti dengan membuat fungsi pengatasian dan daftarkan ke fungsi helper, dan masukkan ke autoload
		// is_logged_in();
	}
	
	public function index() {
		// $data['title'] = 'Dashboard';
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); // mendapatkan data dari admin dengan email yang dibawa saat login
		// echo 'Selamat datang '.$data['user']['name']; // untuk cek tampilkan namanya

		$query = $this->db->get('deaths');
		$data['meninggal'] = $query->num_rows();

		$query = $this->db->get('borns');
		$data['kelahiran'] = $query->num_rows();

		$query = $this->db->get('moves');
		$data['pindah'] = $query->num_rows();

		$query = $this->db->get('comes');
		$data['pendatang'] = $query->num_rows();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
		// echo "wellcome admin";
	}

}
