<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/sejarah/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
