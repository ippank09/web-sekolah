<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

    public function index()
    {

        $data = array(
            'title' => 'MAS',
            'title2' => 'Pengumuman',
            'pengumuman' => $this->m_pengumuman->list(),
            'isi' => 'admin/pengumuman/v_list'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {

        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data =  array(
                'title' => 'MAS',
                'title2' => 'Add data Pengumuman',
                'isi' => 'admin/pengumuman/v_add'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'judul_pengumuman'  => $this->input->post('judul_pengumuman'),
                'isi_pengumuman'    => $this->input->post('isi_pengumuman'),
                'tgl_pengumuman'    => date('Y-m-d')

            );
            $this->m_pengumuman->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
            redirect('pengumuman');
        }
    }



    public function edit($id_pengumuman)
    {
        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data =  array(
                'title' => 'MAS',
                'title2' => 'Edit data Pengumuman',
                'pengumuman' => $this->m_pengumuman->detail($id_pengumuman),
                'isi' => 'admin/pengumuman/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_pengumuman'     => $id_pengumuman,
                'judul_pengumuman'  => $this->input->post('judul_pengumuman'),
                'isi_pengumuman'    => $this->input->post('isi_pengumuman'),
                'tgl_pengumuman'    => date('Y-m-d')

            );
            $this->m_pengumuman->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dirubah!');
            redirect('pengumuman');
        }
    }

    public function delete($id_pengumuman)
    {
        $data = array(
            'id_pengumuman' => $id_pengumuman,
        );
        $this->m_pengumuman->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
        redirect('pengumuman');
    }
}
