<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{

    public function guru(){
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->join('tb_mapel', 'tb_mapel.id_mapel = tb_guru.id_mapel', 'left');
        $this->db->order_by('id_guru', 'desc');
        return $this->db->get()->result();
    }

    public function berita($limit, $start)
    {
        
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita(){
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function galeri()
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->join('tb_foto','tb_foto.id_galeri = tb_galeri.id_galeri','left' );
        $this->db->group_by('tb_galeri.id_galeri');
        $this->db->order_by('tb_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }


}