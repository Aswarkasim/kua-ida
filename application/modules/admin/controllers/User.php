<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {

    $user = $this->Crud_model->listing('tbl_user');
    $data = [

      'user' => $user,
      'add'     => 'admin/user/add',
      'edit'    => 'admin/user/edit/',
      'delete'  => 'admin/user/delete/',
      'content' => 'admin/user/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('String');

    $valid = $this->form_validation;
    $valid->set_rules('id_user', 'Kode Kaategori', 'is_unique[tbl_user.id_user]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));
    $valid->set_rules('nama_user', 'Nama Kaategori', 'is_unique[tbl_user.nama_user]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'nama_user'   => $i->post('nama_user'),
        'keterangan'   => $i->post('keterangan')
      ];
      $this->Crud_model->add('tbl_user', $data);
      $this->session->set_flashdata('msg', 'user berhasil ditambah');
      redirect('admin/user');
    }
  }
  function edit($id_user)
  {
    $valid = $this->form_validation;
    // $valid->set_rules('id_user', 'Kode Kaategori', 'macthes[tbl_user.id_user]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    // $valid->set_rules('nama_user', 'Nama Kaategori', 'macthes[tbl_user.nama_user]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === false) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'nama_user'   => $i->post('nama_user'),
        'id_user'   => $i->post('id_user')
      ];
      $this->Crud_model->edit('tbl_user', 'id_user', $id_user, $data);
      $this->session->set_flashdata('msg', 'user berhasil diedit');
      redirect('admin/user');
    }
  }

  function delete($id_user)
  {
    $this->Crud_model->delete('tbl_user', 'id_user', $id_user);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/user');
  }
}
