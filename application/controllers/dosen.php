<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('dosen_model');
    }

    public function index() {
        $data['dosen'] = $this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['dosen'] = $this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $nidn = $this->input->post('nidn');
        $nama_dosen = $this->input->post('nama_dosen');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
    
        $data = array(
            'nidn' => $nidn,
            'nama_dosen' => $nama_dosen,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'telepon' => $telepon
        );
    
        $result = $this->dosen_model->insert_dosen($data);
    
        if ($result) {
            $this->session->set_flashdata('success', 'Data Dosen Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('error', 'Data Dosen Gagal Disimpan');
        }
        redirect('dosen');
    }
    
    public function hapus($nidn) {
        $this->dosen_model->delete_dosen($nidn);
        $this->session->set_flashdata('success', 'Data Dosen Berhasil Dihapus');
        redirect('dosen');
    }

    public function edit($nidn) {
        $data['dosen'] = $this->dosen_model->get_dosen_by_nidn($nidn);
        
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }
    
    public function update($nidn) {
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
    
        if ($this->form_validation->run() === FALSE) {
            $this->edit($nidn);
        } else {
            $data = [
                'nama_dosen' => $this->input->post('nama_dosen'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email'),
                'telepon' => $this->input->post('telepon')
            ];
    
            $this->dosen_model->update_dosen($nidn, $data);
            $this->session->set_flashdata('success', 'Data Dosen Berhasil Diupdate');
            redirect('dosen');
        }
    }
    
    

 

}


