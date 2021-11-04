<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('', 'refresh');
        }
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = "Informasi Karyawan | Restoran Kebab";
        $data['judulHalaman'] = "Informasi Karyawan";
        $data['subJudulHalaman'] = "Daftar karyawan Restoran Kebab";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = '
            <li class="breadcrumb-item"><a href="User"><i class="ik ik-users"></i></a></li>
            <li class="breadcrumb-item active">Informasi Karyawan</li>';
            
        $this->load->view('components/header', $data);
        $this->load->view('components/sidebar_owner');
        $this->load->view('components/breadcrumbs', $data);
        $this->load->view('pages/user/index');
        $this->load->view('components/footer');
    }

    public function get_all_user(){
        echo json_encode($this->User_model->get_all_user()->result());
    }

}
