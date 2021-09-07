<?php

class Model_Autor extends CI_Model
{
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
}
