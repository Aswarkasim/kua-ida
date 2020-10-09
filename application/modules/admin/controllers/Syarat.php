<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Syarat extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/syarat/add',
      'edit'    => 'admin/syarat/edit/',
      'delete'  => 'admin/syarat/delete/'
    ];

    $syarat = $this->Crud_model->listing('tbl_syarat');
    $data = [

      'syarat' => $syarat,
      'tombol'   => $tombol,
      'content' => 'admin/syarat/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('String');

    $valid = $this->form_validation;
    $valid->set_rules('id_syarat', 'Kode Kaategori', 'macthes[tbl_syarat.id_syarat]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    $valid->set_rules('nama_syarat', 'Nama Kaategori', 'macthes[tbl_syarat.nama_syarat]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'nama_syarat'   => $i->post('nama_syarat'),
        'keterangan'   => $i->post('keterangan')
      ];
      $this->Crud_model->add('tbl_syarat', $data);
      $this->session->set_flashdata('msg', 'syarat berhasil ditambah');
      redirect('admin/syarat');
    }
  }
  function edit($id_syarat)
  {
    $valid = $this->form_validation;
    // $valid->set_rules('id_syarat', 'Kode Kaategori', 'macthes[tbl_syarat.id_syarat]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    // $valid->set_rules('nama_syarat', 'Nama Kaategori', 'macthes[tbl_syarat.nama_syarat]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'nama_syarat'   => $i->post('nama_syarat'),
        'id_syarat'   => $i->post('id_syarat')
      ];
      $this->Crud_model->edit('tbl_syarat', 'id_syarat', $id_syarat, $data);
      $this->session->set_flashdata('msg', 'syarat berhasil diedit');
      redirect('admin/syarat');
    }
  }

  function delete($id_syarat)
  {
    $this->Crud_model->delete('tbl_syarat', 'id_syarat', $id_syarat);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/syarat');
  }
}
