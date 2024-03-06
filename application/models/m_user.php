<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result();
    }

}