<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    public function index()
    {
        $data['mhs'] = $this->m_mahasiswa->TampilData();
        $this->load->view('Mahasiswa', $data);
        
    }
    public function tambah_data()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('jk', 'JK', 'required');
        $validation->set_rules('id_kelas', 'Id_Kelas', 'required');
        $validation->set_rules('email', 'Email', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah');
        } else {
          $this->m_mahasiswa->tambah_data();
          redirect('Mahasiswa');
        }   
    }
    public function hapus($id)
    {
        $this->m_mahasiswa->hapus($id);
        redirect('Mahasiswa');
    } 
    public function edit_data($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['mhs'] = $this->m_mahasiswa->getById($id);

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('jk', 'JK', 'required');
        $validation->set_rules('id_kelas', 'Id_Kelas', 'required');
        $validation->set_rules('email', 'Email', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->m_mahasiswa->edit_data();
            redirect('Mahasiswa');
        }
    }
}