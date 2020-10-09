<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/home/visimisi'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
