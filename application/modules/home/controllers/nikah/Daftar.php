<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/daftar/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }


  function dataPria()
  {
    $data = [
      'content'  => 'home/daftar/pria'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function dataWanita()
  {
    $data = [
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
}
