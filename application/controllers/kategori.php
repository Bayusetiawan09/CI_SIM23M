<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model'); // Model yang benar
    }

    public function index() {
        $data['kategori'] = $this->Kategori_model->get_all_kategori(); // Panggil model dengan benar
        $this->load->view('templates/header');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['kategori'] = $this->Kategori_model->get_all_kategori(); // Perbaiki huruf besar-kecil
        $this->load->view('templates/header');
        $this->load->view('kategori/form_kategori', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori' => $kategori,
        );

        $result = $this->Kategori_model->insert_kategori($data); // Perbaiki nama model

        if ($result) {
            $this->session->set_flashdata('success', 'Kategori Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('error', 'Kategori Gagal Disimpan');
        }
        redirect('kategori');
    }


    public function hapus($idkategori) {
        $this->Kategori_model->delete_kategori($idkategori);
        $this->session->set_flashdata('success', 'kategori Berhasil Dihapus');
        redirect('kategori');
    }



    public function edit($idkategori) {
        $data['kategori'] = $this->Kategori_model->get_kategori_by_id($idkategori);

        $this->load->view('templates/header');
        $this->load->view('kategori/edit_kategori', $data);
        $this->load->view('templates/footer');
    }

    public function update($idkategori) {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit($idkategori);
        } else {
            $data = [
                'kategori' => $this->input->post('kategori')
            ];
            $this->Kategori_model->update_kategori($idkategori, $data);
            $this->session->set_flashdata('success', 'kategori Berhasil Diubah');
            redirect('kategori');
        }
    }

}
