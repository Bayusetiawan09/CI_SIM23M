<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Headline extends CI_Controller{

    public function __construct (){
    parent::__construct();
        $this->load->model('headline_model');
    }

    public function index() {
        $data['headline'] = $this->headline_model->get_all_headline();
        $this->load->view('templates/header');
        $this->load->view('headline/index', $data);
        $this->load->view('templates/footer');

    }

    public function tambah() {
        $data['headline'] = $this->headline_model->get_all_headline();
        $this->load->view('templates/header');
        $this->load->view('headline/form_headline', $data);
        $this->load->view('templates/footer');

    }


    public function insert() {
        $isiheadline = $this->input->post('isiheadline');

        $data = array(
            'isiheadline' => $isiheadline,
        );

        $result = $this->headline_model->insert_headline($data);

        if ($result) {
            $this->session->set_flashdata('success', 'headline Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('error', 'headline Gagal Disimpan');
        }
        redirect('headline');
    }

    public function delete($idheadline){
        $this->headline_model->delete($idheadline);
        $this->session->set_flashdata('success', 'headline Berhasil Dihapus');
        redirect('headline');
    }


    public function edit($idheadline) {
        $data['headline'] = $this->headline_model->get_headline_by_id($idheadline);

        $this->load->view('templates/header');
        $this->load->view('headline/edit_headline', $data);
        $this->load->view('templates/footer');
    }

    public function update($idheadline) {
        $this->form_validation->set_rules('isiheadline', 'isiheadline', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit($idheadline);
        } else {
            $data = [
                'isiheadline' => $this->input->post('isiheadline')
            ];
            $this->headline_model->update_headline($idheadline, $data);
            $this->session->set_flashdata('success', 'Headline Berhasil Diubah');
            redirect('headline');
        }
    }

   
}