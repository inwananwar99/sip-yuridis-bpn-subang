<?php

class Model_Tanah extends CI_Model
{

    public function getData($table)
    {
        return $this->db->get($table);
    }
    public function getPengajuan()
    {
        return $this->db->query("SELECT * FROM pengajuan JOIN tanah ON tanah.nis = pengajuan.nis JOIN pemdes ON pengajuan.id_pemdes = pemdes.id_pemdes");
    }

    public function getPermohonan($id_permohonan)
    {
        return $this->db->query("SELECT * FROM permohonan_tanah JOIN tanah ON tanah.nis = permohonan_tanah.nis WHERE id_permohonan = '$id_permohonan'")->row_array();
    }



    public function tambahData($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function tambahEstimasi($data)
    {
        return $this->db->query("insert into estimasi (hasil_estimasi) values ('$data')");
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

    public function cariDataPengajuan($katakunci)
    {
        return $this->db->query("SELECT * FROM pengajuan JOIN tanah ON tanah.nis = pengajuan.nis JOIN pemdes ON pengajuan.id_pemdes = pemdes.id_pemdes  WHERE tanah.nis LIKE '$katakunci'")->result_array();
    }

    public function ubahPengajuan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getEstimasi()
    {
        return $this->db->query('select jumlah_bidang_tanah,estimasi_waktu from pendataan');
    }
}
