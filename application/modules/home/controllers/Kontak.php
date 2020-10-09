<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/home/kontak'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
