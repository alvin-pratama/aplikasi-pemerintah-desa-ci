<?php

class Pendatang_model extends CI_Model {

	public function getAllPendatang() {
		return $this->db->get('comes')->result_array();
	}

	public function hapusDataPendatang($id) {
		$this->db->delete('comes', ['id' => $id]);
	}

	public function tambahDataPendatang() {
		$data = [
			"come_nik" => $this->input->post('come_nik', true),
			"come_name" => $this->input->post('come_name', true),
			"come_gender" => $this->input->post('come_gender', true),
			"come_at" => $this->input->post('come_at', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true),
			"whistleblower_nik" => $this->input->post('whistleblower_nik', true),
			"whistleblower_name" => $this->input->post('whistleblower_name', true),
			"reason" => $this->input->post('reason', true)
		];

		$this->db->insert('comes', $data);
	}

	public function getPendatangById($id) {
		return $this->db->get_where('comes', ['id' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function ubahDataPendatang() {
		$data = [
			"come_nik" => $this->input->post('come_nik', true),
			"come_name" => $this->input->post('come_name', true),
			"come_gender" => $this->input->post('come_gender', true),
			"come_at" => $this->input->post('come_at', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true),
			"whistleblower_nik" => $this->input->post('whistleblower_nik', true),
			"whistleblower_name" => $this->input->post('whistleblower_name', true),
			"reason" => $this->input->post('reason', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('comes', $data);
	}

}