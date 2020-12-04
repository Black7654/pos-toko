<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TokoModel extends CI_Model
{
    public function getData($tabel)
    {
        $data = $this->db->get($tabel);
        return $data->result();
    }

    public function getById($id)
    {
        $data = $this->db->where('id', $id);
        $data = $this->db->get('tb_toko');
        return $data;
    }

    public function getDataEdit($tabel, $col, $id)
    {
        $data = $this->db->get_where($tabel, array($col => $id));
        return $data->result();
    }
    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getDataTerakhir($tabel, $id)
    {
        $data = $this->db->query("SELECT * FROM " . $tabel . " ORDER BY " . $id . " DESC limit 1");
        return $data->result_array();
    }

    public function simpanData($tb_toko, $data)
    {
        $data = $this->db->insert($tb_toko, $data);
        return $data;
    }

    public function updateData($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $data;
    }
    function updateAktif($idToko)
    {
        $exp_date =  date('Y-m-d', strtotime('+30 days', strtotime(date('Y-m-d'))));
        $data = array(
            'is_aktif' => 'yes',
            'exp_date' => $exp_date
        );
        $this->db->where('idToko', $idToko);
        $this->db->update('tb_toko', $data);
    }

    public function deleteData($tabel, $where)
    {
        $data = $this->db->delete($tabel, $where);
        return $data;
    }

    public function truncate($tabel)
    {
        $data = $this->db->query('TRUNCATE TABLE ' . $tabel);
        return $data;
    }
}
