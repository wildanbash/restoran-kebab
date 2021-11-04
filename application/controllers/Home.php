<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('', 'refresh');
        }
    }


    public function index()
    {
        // start resepsionis
        $data['title'] = "Home | Restoran Kebab";
        $data['judulHalaman'] = "Home";
        $data['subJudulHalaman'] = "Selamat datang di <b>Restoran Kebab</b>";
        $data['iconHalaman'] = "ik-home";
        $data['breadcrumbs'] = '
            <li class="breadcrumb-item active"><i class="ik ik-home"></i></li>';

        $this->load->view('components/header', $data);

        if ($this->session->userdata('level') == 1) {
            $this->load->view('components/sidebar_owner');
        } elseif ($this->session->userdata('level') == 2) {
            $this->load->view('components/sidebar_kasir');
        } else {
            $this->load->view('components/sidebar_karyawan');
        }

        $this->load->view('components/breadcrumbs', $data);
        $this->load->view('pages/home/index');

        $this->load->view('components/footer');
        // end resepsionis
    }
}
