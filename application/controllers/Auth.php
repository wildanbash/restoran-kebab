<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    

    public function index()
    {
        $data['title'] = "Login | Tumbuh Sehat";
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s masih kosong!',
                'valid_email' => '%s format emailnya salah!',
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong!'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('components/header_auth', $data);
            $this->load->view('pages/auth/login', $data);
            $this->load->view('components/footer_auth');
        } else {
            $this->proseslogin();
        }
    }

    private function prosesLogin(){
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars(md5($this->input->post('password')));

        $ceklogin = $this->auth_model->login($email, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row);
            $this->session->set_userdata('id_user', $row->id_user);
            $this->session->set_userdata('nama', $row->nama);
            $this->session->set_userdata('email', $row->email);
            $this->session->set_userdata('alamat', $row->alamat);
            $this->session->set_userdata('level', $row->level);
            
            redirect('home', 'refresh');
        } else {
            $this->session->set_flashdata('gagal-login', 'Cek kembali email dan password!');
            redirect('');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }

}
