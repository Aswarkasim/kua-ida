<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_admin') == "") {
            redirect('admin/auth');
        }
    }


    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');
        $user = $this->Crud_model->listingOne('tbl_admin', 'id_admin', $id_admin);

        $data = [
            'title'     => 'Dashboard',
            'user'      => $user,
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

/* End of file Dashboard.php */
