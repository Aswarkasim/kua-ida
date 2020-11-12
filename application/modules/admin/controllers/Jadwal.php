<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/Admin_model', 'AM');
  }


  public function index()
  {
    $jadwal = $this->Crud_model->listing('tbl_jadwal');
    $data = [
      'title' => 'Jadwal Pernikahan',
      'add'      => 'admin/jadwal/add',
      'edit'      => 'admin/jadwal/edit/',
      'delete'      => 'admin/jadwal/delete/',
      'jadwal'      => $jadwal,
      'content'   => 'admin/jadwal/index'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');

    $valid = $this->form_validation;

    $valid->set_rules('nama_pria', 'Nama Pria', 'required');
    $valid->set_rules('nama_wanita', 'Nama Wanita', 'required');
    $valid->set_rules('tanggal', 'Tanggal Akad', 'required');
    $valid->set_rules('tempat', 'Tempat', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Tambah Jadwal',
        'add'       => 'admin/jadwal/add',
        'back'      => 'admin/jadwal',
        'content'   => 'admin/jadwal/add'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_jadwal'       => random_string('numeric', '15'),
        'nama_pria'       => $i->post('nama_pria'),
        'nama_wanita'     => $i->post('nama_wanita'),
        'tanggal'         => $i->post('tanggal'),
        'tempat'           => $i->post('tempat'),
        'is_done'         => $i->post('is_done'),
        'penghulu'        => $i->post('penghulu'),
        'mahar_pernikahan' => $i->post('mahar_pernikahan'),
        'saksi'           => $i->post('saksi'),
        'wali_wanita'     => $i->post('wali_wanita'),
      ];
      $this->Crud_model->add('tbl_jadwal', $data);
      $this->session->set_flashdata('msg', 'ditambah');
      redirect('admin/jadwal/add', 'refresh');
    }
  }

  function edit($id_jadwal)
  {
    $jadwal = $this->Crud_model->listingOne('tbl_jadwal', 'id_jadwal', $id_jadwal);

    $valid = $this->form_validation;

    $valid->set_rules('nama_pria', 'Nama Pria', 'required');
    $valid->set_rules('nama_wanita', 'Nama Wanita', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Edit Jadwal',
        'edit'       => 'admin/jadwal/edit/' . $id_jadwal,
        'back'      => 'admin/jadwal',
        'jadwal'    => $jadwal,
        'content'   => 'admin/jadwal/edit'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'nama_pria'       => $i->post('nama_pria'),
        'nama_pria'       => $i->post('nama_pria'),
        'nama_wanita'     => $i->post('nama_wanita'),
        'tanggal'         => $i->post('tanggal'),
        'tempat'           => $i->post('tempat'),
        'is_done'         => $i->post('is_done'),
        'penghulu'        => $i->post('penghulu'),
        'mahar_pernikahan' => $i->post('mahar_pernikahan'),
        'saksi'           => $i->post('saksi'),
        'wali_wanita'     => $i->post('wali_wanita'),
      ];
      $this->Crud_model->edit('tbl_jadwal', 'id_jadwal', $id_jadwal, $data);
      $this->session->set_flashdata('msg', 'ditambah');
      redirect('admin/jadwal/edit/' . $id_jadwal, 'refresh');
    }
  }

  function delete($id_jadwal)
  {
    $this->Crud_model->delete('tbl_jadwal', 'id_jadwal', $id_jadwal);
    $this->session->set_flashdata('msg', 'dihapus');
    redirect('admin/jadwal', 'refresh');
  }

  function cetakList()
  {
    $jadwal = $this->Crud_model->listing('tbl_jadwal');
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $data = [
      'jadwal'  => $jadwal,
      'konfigurasi'  => $konfigurasi
    ];
    $this->load->view('admin/jadwal/cetakList', $data, FALSE);
  }

  function printListRange()
  {


    $awal = $this->input->post('awal');
    $akhir = $this->input->post('akhir');
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $jadwal = $this->AM->printListRange($awal, $akhir);
    $data = [
      'jadwal'  => $jadwal,
      'konfigurasi'  => $konfigurasi
    ];
    $this->load->view('admin/jadwal/cetakList', $data, FALSE);
  }

  function printSelesai()
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $jadwal = $this->AM->printDone('Selesai');
    $data = [
      'jadwal'  => $jadwal,
      'konfigurasi'  => $konfigurasi
    ];
    $this->load->view('admin/jadwal/cetakList', $data, FALSE);
  }

  function printBelum()
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $jadwal = $this->AM->printDone('Belum Selesai');
    $data = [
      'jadwal'  => $jadwal,
      'konfigurasi'  => $konfigurasi
    ];
    $this->load->view('admin/jadwal/cetakList', $data, FALSE);
  }
}

/* End of file Jadwal.php */
