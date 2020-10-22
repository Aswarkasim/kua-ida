<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('home/Home_model', 'HM');
  }


  public function index()
  {
    $data = [
      'content'  => 'home/daftar/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }


  function dataPria()
  {
    is_logged_in_user();

    $this->load->helper('string');
    $id_user = $this->session->userdata('id_user');
    $data = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if ($data == null) {
      $dataAdd = [
        'id_daftar' => random_string(),
        'id_user' => $id_user
      ];
      $this->Crud_model->add('tbl_daftar', $dataAdd);
      $this->session->set_flashdata('id_daftar', $dataAdd['id_daftar']);
    }

    $data = [
      'dataPria'    => $data,
      'content'  => 'home/daftar/pria'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function dataWanita($id_daftar)
  {
    $data = [
      'id_daftar' => $id_daftar,
      'content'  => 'home/daftar/wanita'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function dataLengkap()
  {
    $data = [
      'content'  => 'home/daftar/kelengkapan'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function selesai()
  {
    $data = [
      'content'  => 'home/daftar/selesai'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function uploadKtp()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ktp_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '24000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ktp_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->ktp_pria != "") {
          unlink($dataDaftar->ktp_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ktp_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'KTP diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }
}
