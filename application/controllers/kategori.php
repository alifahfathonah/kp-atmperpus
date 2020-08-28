<?php

class Kategori extends CI_Controller{
    public function umum(){
        $data['umum'] = $this->m_kategori->data_umum()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('umum', $data);
        $this->load->view('templates/footer');
    }

    public function pemasaran(){
        $data['pemasaran'] = $this->m_kategori->data_pemasaran()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pemasaran', $data);
        $this->load->view('templates/footer');
    }

    public function pariwisata(){
        $data['pariwisata'] = $this->m_kategori->data_pariwisata()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pariwisata', $data);
        $this->load->view('templates/footer');
    }

    public function peternakan(){
        $data['peternakan'] = $this->m_kategori->data_peternakan()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peternakan', $data);
        $this->load->view('templates/footer');
    }

    public function motivasi(){
        $data['motivasi'] = $this->m_kategori->data_motivasi()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('motivasi', $data);
        $this->load->view('templates/footer');
    }
}