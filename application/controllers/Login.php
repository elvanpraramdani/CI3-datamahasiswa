<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('v_login');
    }
    public function login_aksi()
    {
        $usser = $this->input->post('username', true);
        $pass = $this->input->post('password', true);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'username' => $usser,
                'password' => $pass
            );
            $ceklogin = $this->m_login->cek_login($where)->num_rows();
            if ($ceklogin > 0) {
                $sess_data = array(
                    'username' => $usser,
                    'login' =>  'oK'
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url('mahasiswa'));
            } else {
                redirect(base_url('login'));
            }
        } else {
            $this->load->view('v_login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
