<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
        $this->load->model('m_user');               
    }

    public function index()
    {
        $data = array(
            'title' => 'MAS',
            'title2' => 'Berita',
            'berita' => $this->m_berita->lists(),
            'isi' => 'admin/berita/v_list'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi berita', 'required');
        $this->form_validation->set_rules('id_user', 'id user', 'required');
        
        
        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './gambar_berita/';
            $config['allowed_types']        = 'gif|jpg|png|jfif';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {

                $data = array(
                    'title' => 'MAS',
                    'title2' => 'Add data berita',
                    'error' => $this->upload->display_errors(),
                    'user' => $this->m_user->lists(),
                    'isi' => 'admin/berita/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita'       => $this->input->post('judul_berita'),
                    'isi_berita'        => $this->input->post('isi_berita'),
                    'id_user'        => $this->input->post('id_user'),
                    'gambar_berita'       =>$upload_data['uploads']['file_name'],
                    'tgl_berita'        => date('Y-m-d')
                );
                $this->m_berita->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
                redirect('berita');
            }
        }
        $data = array(
            'title' => 'MAS',
            'title2' => 'Add data berita',
            'user' => $this->m_user->lists(),
            'isi' => 'admin/berita/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_berita)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi berita', 'required');
        
        
        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './gambar_berita/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {

                $data = array(
                    'title' => 'MAS',
                    'title2' => 'Add data berita',
                    'error' => $this->upload->display_errors(),
                    'berita' => $this->m_berita->detail($id_berita),
                    'user' => $this->m_user->lists(),
                    'isi' => 'admin/berita/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                //Hapus foto lama berita
                $berita = $this->m_berita->detail($id_berita);
                if ($berita->gambar_berita != "") {
                    unlink('./gambar_berita/'.$berita->gambar_berita);
                }

                $data = array(
                    'id_berita'         =>$id_berita,
                    'judul_berita'       => $this->input->post('judul_berita'),
                    'isi_berita'        => $this->input->post('isi_berita'),
                    'id_user'        => $this->input->post('id_user'),
                    'gambar_berita'       =>$upload_data['uploads']['file_name'],
                    'tgl_berita'        => date('Y-m-d')
                );
                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
                redirect('berita');
            }

                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_berita'         =>$id_berita,
                    'judul_berita'       => $this->input->post('judul_berita'),
                    'isi_berita'        => $this->input->post('isi_berita'),
                    'id_user'        => $this->input->post('id_user'),
                    'tgl_berita'        => date('Y-m-d')
                );
                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
                redirect('berita');
        }
        $data = array(
            'title' => 'MAS',
            'title2' => 'Add data berita',
            'berita' => $this->m_berita->detail($id_berita),
            'user' => $this->m_user->lists(),
            'isi' => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    
    }

    public function delete($id_berita)
    {
       $berita = $this->m_berita->detail($id_berita);
       if ($berita->foto != "") {
           unlink('./gambar_berita/'.$berita->gambar_berita);
       }

       $data = array(
           'id_berita'  => $id_berita,);
       
           
       $this->m_berita->delete($data);
       $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
       redirect('berita');

    }
}

