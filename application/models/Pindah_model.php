<?php

class Pindah_model extends CI_Model {

	public function getAllPindah() {
		return $this->db->get('moves')->result_array();
	}

	public function hapusDataPindah($id) {
		$this->db->delete('moves', ['id' => $id]);
	}

	public function tambahDataPindah() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"name" => $this->input->post('name', true),
			"gender" => $this->input->post('gender', true),
			"moved_at" => $this->input->post('moved_at', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true),
			"reason" => $this->input->post('reason', true)
		];

		$this->db->insert('moves', $data);
	}

	public function getPindahById($id) {
		return $this->db->get_where('moves', ['id' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function ubahDataPindah() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"name" => $this->input->post('name', true),
			"gender" => $this->input->post('gender', true),
			"moved_at" => $this->input->post('moved_at', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true),
			"reason" => $this->input->post('reason', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('moves', $data);
	}

}