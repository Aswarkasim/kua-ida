<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'AM');
  }


  public function index()
  {
    $pendaftaran = $this->AM->listDaftar();
    $data = [
      'title'    => 'List Pendaftaran',
      'add'    => 'admin/pendaftaran/add',
      'edit'    => 'admin/pendaftaran/edit/',
      'delete'    => 'admin/pendaftaran/delete/',
      'pendaftaran'   => $pendaftaran,
      'content'  => 'admin/pendaftaran/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }


  public function detail($id_daftar)
  {
    $daftar = $this->AM->detailDaftar($id_daftar);
    $data = [
      'daftar'  => $daftar,
      'content'  => 'admin/pendaftaran/detail'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function editPenghulu($id_daftar)
  {
    $data = [
      'penghulu'  => $this->input->post('penghulu')
    ];
    $this->Crud_model->edit('tbl_daftar', 'id_daftar', $id_daftar, $data);
    $this->session->set_flashdata('msg', 'Penghulu telah disimpan');
    redirect('admin/pendaftaran/detail/' . $id_daftar);
  }

  function is_valid()
  {
    $value = $this->uri->segment('4');
    $id_daftar = $this->uri->segment('5');
    $data = [
      'is_valid' => $value
    ];
    $this->Crud_model->edit('tbl_daftar', 'id_daftar', $id_daftar, $data);
    $this->session->set_flashdata('msg', 'Berkas telah divalidasi');
    redirect('admin/pendaftaran/detail/' . $id_daftar);
  }

  function addJadwal($id_daftar)
  {

    $this->load->helper('string');

    $cek_daftar = $this->Crud_model->listingOne('tbl_jadwal', 'id_daftar', $id_daftar);
    $daftar = $this->Crud_model->listingOne('tbl_daftar', 'id_daftar', $id_daftar);
    if ($cek_daftar) {
      $id_jadwal = $cek_daftar->id_daftar;
    } else {
      $id_jadwal = random_string('numeric', '15');
    }
    $data = [
      'id_jadwal'       => $id_jadwal,
      'id_daftar'       => $id_daftar,
      'nama_pria'       => $daftar->nama_pria,
      'nama_wanita'     => $daftar->nama_wanita,
      'tanggal'            => $daftar->tgl_akad_nikah,
      'tempat'          => $daftar->tempat_akad,
      'is_done'         => 'Belum Selesai',
      'penghulu'        => $daftar->penghulu,
      'mahar_pernikahan' => $daftar->mahar_pernikahan,
      'saksi'           => $daftar->saksi,
      'wali_wanita'     => $daftar->wali_wanita
    ];
    if ($cek_daftar == null) {
      $this->Crud_model->add('tbl_jadwal', $data);
    } else {
      $this->Crud_model->edit('tbl_jadwal', 'id_jadwal', $id_jadwal, $data);
    }
    $this->session->set_flashdata('msg', 'Jadwal telah dibuat');
    redirect('admin/pendaftaran/detail/' . $id_daftar, 'refresh');
  }

  function cetak($id_daftar)
  {
    $daftar = $this->AM->detailDaftar($id_daftar);
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $data = [
      'daftar'  => $daftar,
      'konfigurasi'  => $konfigurasi
    ];
    $this->load->view('admin/pendaftaran/cetak', $data, FALSE);
  }

  function delete($id_daftar)
  {
    $daftar = $this->Crud_model->listingOne('tbl_daftar', 'id_daftar', $id_daftar);

    if ($daftar->ktp_pria) {
      unlink($daftar->ktp_pria);
    }

    if ($daftar->ktp_wali_pria) {
      unlink($daftar->ktp_wali_pria);
    }

    if ($daftar->kk_pria) {
      unlink($daftar->kk_pria);
    }
    if ($daftar->ijazah_terakhir_pria) {
      unlink($daftar->ijazah_terakhir_pria);
    }
    if ($daftar->sk_imunitas_pria) {
      unlink($daftar->sk_imunitas_pria);
    }
    if ($daftar->sk_belum_menikah_pria) {
      unlink($daftar->sk_belum_menikah_pria);
    }
    if ($daftar->foto_pria) {
      unlink($daftar->foto_pria);
    }
    if ($daftar->akta_cerai_pria) {
      unlink($daftar->akta_cerai_pria);
    }
    if ($daftar->sk_kematian_cerai_pria) {
      unlink($daftar->sk_kematian_cerai_pria);
    }
    if ($daftar->piagam_nasehat_pernikahan_pria) {
      unlink($daftar->piagam_nasehat_pernikahan_pria);
    }


    if ($daftar->ktp_wanita) {
      unlink($daftar->ktp_wanita);
    }

    if ($daftar->ktp_wali_wanita) {
      unlink($daftar->ktp_wali_wanita);
    }

    if ($daftar->kk_wanita) {
      unlink($daftar->kk_wanita);
    }
    if ($daftar->ijazah_terakhir_wanita) {
      unlink($daftar->ijazah_terakhir_wanita);
    }
    if ($daftar->sk_imunitas_wanita) {
      unlink($daftar->sk_imunitas_wanita);
    }
    if ($daftar->sk_belum_menikah_wanita) {
      unlink($daftar->sk_belum_menikah_wanita);
    }
    if ($daftar->pas_foto_wanita) {
      unlink($daftar->pas_foto_wanita);
    }
    if ($daftar->akta_cerai_wanita) {
      unlink($daftar->akta_cerai_wanita);
    }
    if ($daftar->sk_kematian_cerai_wanita) {
      unlink($daftar->sk_kematian_cerai_wanita);
    }
    if ($daftar->piagam_nasehat_pernikahan_wanita) {
      unlink($daftar->piagam_nasehat_pernikahan_wanita);
    }

    if ($daftar->rekomendasi_nikah) {
      unlink($daftar->rekomendasi_nikah);
    }
    if ($daftar->sk_desa) {
      unlink($daftar->sk_desa);
    }


    $this->Crud_model->delete('tbl_daftar', 'id_daftar', $id_daftar);
    $this->session->set_flashdata('msg', 'Data dihapus');
    redirect('admin/pendaftaran', 'refresh');
  }
}
