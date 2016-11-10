<?php

class Mobil_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('mobil');
		return $query->result();
	}

	public function tambah_mobil()
	{
		$data = [
					'kdmobil' => $this->input->post('kdmobil'),
					'jenis' => $this->input->post('jenis'),
					'tahun' => $this->input->post('tahun'),
					'harga' => $this->input->post('harga'),
					'nopol' => $this->input->post('nopol'),
				];

		$this->db->insert('mobil', $data);
	}

	public function edit_mobil($id)
	{
		$query = $this->db->get_where('mobil', ['kdmobil' => $id]);
		return $query->row();
	}

	public function update_mobil()
	{
		$kondisi = ['kdmobil' => $this->input->post('kdmobil')];
		
		$data = [
					'jenis' => $this->input->post('jenis'),
					'tahun' => $this->input->post('tahun'),
					'harga' => $this->input->post('harga'),
					'nopol' => $this->input->post('nopol'),
				];

		$this->db->update('mobil', $data, $kondisi);
	}

	public function hapus_mobil($id)
	{
		$this->db->delete('mobil', ['kdmobil' => $id]);
	}
}

?>