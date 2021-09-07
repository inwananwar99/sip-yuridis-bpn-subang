<?php

class Model_Inventarisasi extends CI_Model
{
	public function index($table, $number, $offset)
	{
		return $this->db->get($table, $number, $offset);
	}
	public function getData($table)
	{
		return $this->db->get($table);
	}
	public function tambahData($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function getUbahData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function ubahData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapusData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function jumlahData($table)
	{
		return $this->db->get($table)->num_rows();
	}

	public function cariDataTanah($katakunci)
	{
		$this->db->like('nis', $katakunci);
		$this->db->or_like('nama_pemilik', $katakunci);
		$this->db->or_like('blok', $katakunci);
		$this->db->or_like('nama_penggarap', $katakunci);
		return $this->db->get('tanah')->result_array(); // 
	}

	public function cariDataTanaman($katakunci)
	{
		$this->db->like('nis', $katakunci);
		$this->db->or_like('nama_pemilik_tanah', $katakunci);
		$this->db->or_like('nama', $katakunci);
		return $this->db->get('tanaman')->result_array(); // 
	}
	public function cariDataBangunan($keyword)
	{
		$this->db->like('nis', $keyword);
		return $this->db->get('bangunan')->result_array();
	}
}
