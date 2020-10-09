<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

  
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('home/Home_model','HM');
    
  }
  

  public function index()
  {
    $berita = $this->HM->;
    $data = [
      'content'  => 'home/home/berita'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
