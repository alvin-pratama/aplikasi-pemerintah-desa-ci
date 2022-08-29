<?php

class Meninggal_model extends CI_Model {

	public function getAllMeninggal() {
		return $this->db->get('deaths')->result_array();
	}

	public function hapusDataMeninggal($id) {
		$this->db->delete('deaths', ['id' => $id]);
	}

	public function tambahDataMeninggal() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"name" => $this->input->post('name', true),
			"gender" => $this->input->post('gender', true),
			"dead_at" => $this->input->post('dead_at', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true),
			"reason" => $this->input->post('reason', true)
		];

		$this->db->insert('deaths', $data);
	}

	public function getMeninggalById($id) {
		return $this->db->get_where('deaths', ['id' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function UbahDataMeninggal() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"name" => $this->input->post('name', true),
			"gender" => $this->input->post('gender', true),
			"dead_at" => $this->input->post('dead_at', true),
			"neighbourhood" => $this->input->post('neighbourhood', true),
			"hamlet" => $this->input->post('hamlet', true),
			"village" => $this->input->post('village', true),
			"urban_village" => $this->input->post('urban_village', true),
			"district" => $this->input->post('district', true),
			"regency" => $this->input->post('regency', true),
			"reason" => $this->input->post('reason', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('deaths', $data);
	}

}
