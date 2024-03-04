<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_galeri', $data); 
    }

    public function detail($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_galeri',$data['id_galeri']);
        $this->db->update('tb_galeri', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_galeri',$data['id_galeri']);
        $this->db->delete('tb_galeri', $data);
    }


}    