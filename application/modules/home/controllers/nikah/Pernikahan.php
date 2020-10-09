<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pernikahan extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/pernikahan/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
