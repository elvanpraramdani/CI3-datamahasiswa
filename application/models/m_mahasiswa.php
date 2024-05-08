<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mahasiswa extends CI_Model
{
    private $_table = "mhs";

    public function TampilData()
    {
        return $this->db->where('mhs.id_kelas = kelas.id_kelas')->get('mhs, kelas')->result_array();
    }
    public function tambah_data()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'jk' => $this->input->post('jk', true),
            'id_kelas' => $this->input->post('id_kelas', true),
            'email' => $this->input->post('email', true)
        );

        //masukan data yang berhasil di input tiap-tiap field
        
       $this->db->insert($this->_table, $data);
        
    }
    public function hapus($id)
    {
        $this->db->where('id_mhs', $id);
        $this->db->delete($this->_table);
    
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_mhs' => $id])->row_array();
    }

    public function edit_data()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'jk' => $this->input->post('jk'),
            'id_kelas' => $this->input->post('id_kelas'),
            'email' => $this->input->post('email')
        );
        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id_mhs', $this->input->post('id_mhs'));
        $this->db->update($this->_table, $data);
    } 
}