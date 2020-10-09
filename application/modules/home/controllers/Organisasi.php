<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/home/organisasi'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
