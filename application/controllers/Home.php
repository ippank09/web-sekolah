<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
        $this->load->model('M_mapel');
		$this->load->model('M_home');

    }	

	public function index()
	{
		$data = array(
			'title' => 'Web Sekolah',
			'berita' => $this->M_home->slider_berita(),
			'galeri2' =>$this->M_home->galeri(),
			'guruHome' => $this->M_home->guru(),
			'isi' => 'v_home'
		);

		$this->load->view('layout/v_wrapperHome', $data, FALSE);
	}

	public function guru(){
		$data = array(
			'title' => 'Guru',
			'guru' => $this->M_home->guru(),
			'isi' => 'v_guru'
		);

		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function berita(){

		$this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->M_home->total_berita());
		$config['per_page'] = 6;
		$config['uri_segmen'] = 3;

		//start & limit
		$limit = $config['per_page'];
		$start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

		//---------------
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['prev_link'] = 'Prev';

		$config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_open'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['preview_tag_open'] = '<li>';
		$config['preview_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</ul></div>';

		$this->pagination->initialize($config);

		$data = array(
			'paginasi' => $this->pagination->create_links(),
			'latest_berita' =>$this->M_home->latest_berita(),
			'berita' => $this->M_home->berita($limit,$start),
			'title' => 'Berita',
			'isi' => 'v_berita'
		);

		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function detail_berita($slug_berita=null)
	{
		$data = array(
			'title' => 'Detail_Berita',
			'latest_berita' =>$this->M_home->latest_berita(),
			'berita' => $this->M_home->detail_berita($slug_berita),
			'isi' => 'v_detail_berita'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function latest_berita(){

	}

	public function galeri(){
	
	  $data = array(
			'title' => 'Galeri',
			'galeri' =>$this->M_home->galeri(),
			'isi' =>'v_galeri'	
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function detail_galeri($id_galeri){
	
		$data = array(
			  'title' => 'Galeri Foto',
			  'foto' =>$this->M_home->detail_galeri($id_galeri),
			  'nama_galeri' => $this->M_home->nama_galeri($id_galeri),
			  'isi' =>'v_detail_galeri'	
		  );
		  $this->load->view('layout/v_wrapper', $data, FALSE);
	  }


	  public function siswa()
	  {
		$data = array(
			'title' => 'Siswa',
			'siswa' =>$this->M_home->siswa(),
			'isi' =>'v_siswa'	
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	  }

	  public function profile()
	  {
		$data = array(
			'title' => 'Profile',
			 'profile' =>$this->M_setting->detail(),
			'isi' =>'v_profile'	
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	  }

	  public function about()
	  {
		$data = array(
			'title' => 'Hubungi Kami',
			 'about' =>$this->M_setting->detail(),
			'isi' =>'v_about'	
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	  }

	  


}