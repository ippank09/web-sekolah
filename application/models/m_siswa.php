<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_siswa', $data);
    }

    public function detail($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_siswa',$data['id_siswa']);
        $this->db->update('tb_siswa', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_siswa',$data['id_siswa']);
        $this->db->delete('tb_siswa', $data);
    }

}    