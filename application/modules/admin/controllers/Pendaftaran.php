<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'AM');
  }


  public function index()
  {
    $pendaftaran = $this->Crud_model->listing('tbl_pendaftaran');
    $data = [
      'title'    => 'List Pendaftaran',
      'add'    => 'admin/pendaftaran/add',
      'edit'    => 'admin/pendaftaran/edit/',
      'pendaftaran'   => $pendaftaran,
      'content'  => 'admin/pendaftaran/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function detail($slug)
  {


    // $pendaftaran = $this->AM->detailPendaftaran($slug)->row();
    $pendaftaran = $this->Crud_model->listingOne('tbl_pendaftaran', 'slug', $slug);
    $data =
      [
        'pendaftaran'   =>  $pendaftaran,
        'content'  => 'admin/pendaftaran/detail'
      ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');

    $kategori = $this->Crud_model->listing('tbl_kategori');

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('judul_pendaftaran', 'Judul Pendaftaran', 'required', ['required' => $required]);
    $valid->set_rules('isi', 'Isi Pendaftaran', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Tambah Pendaftaran',
            'add'    => 'admin/pendaftaran/add',
            'edit'    => 'admin/pendaftaran/edit/',
            'back'    => 'admin/pendaftaran',
            'kategori'    => $kategori,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/pendaftaran/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $slug = random_string() . url_title($i->post('-judul_pendaftaran', 'dash', true));
          $data = [
            'id_pendaftaran'       => random_string(),
            'id_kategori'     => $i->post('id_kategori'),
            'judul_pendaftaran'    => $i->post('judul_pendaftaran'),
            'slug'            => $slug,
            'isi'             => $i->post('isi'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_pendaftaran', $data);
          $this->session->set_flashdata('msg', 'Pendaftaran ditambahkan');
          redirect('admin/pendaftaran/detail/' . $data['slug']);
        }
      }
    }
    $data = [
      'title'    => 'Tambah Pendaftaran',
      'add'    => 'admin/pendaftaran/add',
      'edit'    => 'admin/pendaftaran/edit/',
      'back'    => 'admin/pendaftaran',
      'kategori'    => $kategori,
      'content'  => 'admin/pendaftaran/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function edit($slug)
  {

    $this->load->helper('string');

    $kategori = $this->Crud_model->listing('tbl_kategori');
    $pendaftaran = $this->Crud_model->listingOne('tbl_pendaftaran', 'slug', $slug);

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('judul_pendaftaran', 'Judul Pendaftaran', 'required', ['required' => $required]);
    $valid->set_rules('isi', 'Isi Pendaftaran', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Tambah Pendaftaran',
            'add'    => 'admin/pendaftaran/add',
            'edit'    => 'admin/pendaftaran/edit/',
            'back'    => 'admin/pendaftaran',
            'kategori'    => $kategori,
            'pendaftaran'    => $pendaftaran,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/pendaftaran/edit'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $slug = url_title($i->post('judul_pendaftaran', 'dash', true));
          $data = [
            'id_pendaftaran'       => random_string(),
            'id_kategori'     => $i->post('id_kategori'),
            'judul_pendaftaran'    => $i->post('judul_pendaftaran'),
            'slug'            => $slug,
            'isi'             => $i->post('isi'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_pendaftaran', 'slug', $slug, $data);
          $this->session->set_flashdata('msg', 'Pendaftaran diedit');
          redirect('admin/pendaftaran/detail/' . $data['slug']);
        }
      } else {
        $i = $this->input;

        $slug = url_title($i->post('judul_pendaftaran', 'dash', true));
        $data = [
          'id_pendaftaran'       => random_string(),
          'id_kategori'     => $i->post('id_kategori'),
          'judul_pendaftaran'    => $i->post('judul_pendaftaran'),
          'slug'            => $slug,
          'isi'             => $i->post('isi'),
        ];
        $this->Crud_model->edit('tbl_pendaftaran', 'id_pendaftaran', $id_pendaftaran, $data);
        $this->session->set_flashdata('msg', 'Pendaftaran diedit');
        redirect('admin/pendaftaran/detail/' . $data['slug']);
      }
    }
    $data = [
      'title'    => 'Tambah Pendaftaran',
      'edit'    => 'admin/pendaftaran/edit/',
      'back'    => 'admin/pendaftaran',
      'kategori'    => $kategori,
      'pendaftaran'    => $pendaftaran,
      'content'  => 'admin/pendaftaran/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
}
