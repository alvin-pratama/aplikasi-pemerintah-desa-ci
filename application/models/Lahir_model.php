<?php

class Lahir_model extends CI_Model {

	public function getAllLahir() {
		$query = $this->db->get('borns');
		return $query->result_array();
	}

	public function hapusDataLahir($id) {
		$this->db->delete('borns', ['id' => $id]);
	}

	public function tambahDataLahir() {
		$data = [
			"kk" => $this->input->post('kk', true),
			"baby_nik" => $this->input->post('baby_nik', true),
			"baby_name" => $this->input->post('baby_name', true),
			"baby_gender" => $this->input->post('baby_gender', true),
			"borned_at" => $this->input->post('borned_at', true),
			"mother_name" => $this->input->post('mother_name', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true)
		];

		$this->db->insert('borns', $data);
	}

	public function getLahirById($id) {
		return $this->db->get_where('borns', ['id' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function ubahDataLahir() {
		$data = [
			"kk" => $this->input->post('kk', true),
			"baby_nik" => $this->input->post('baby_nik', true),
			"baby_name" => $this->input->post('baby_name', true),
			"baby_gender" => $this->input->post('baby_gender', true),
			"borned_at" => $this->input->post('borned_at', true),
			"mother_name" => $this->input->post('mother_name', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('borns', $data);
	}

}