<?php

class Dashboard extends CI_Controller{
    public function index(){
        $data['ebook'] = $this->m_ebook->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function baca($id_ebook){
        // header("Content-type: application/pdf");
        // header("Content-Length: " . filesize ('uploads/pdf/',$baca ) ); 
        // header("Content-type: application/pdf"); 
        // header("Content-disposition: inline;     
        // filename=".basename('uploads/pdf/',$baca));
        // header('Expires: 0');
        // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        // $filepath = readfile('uploads/pdf/',$baca);

        $this->load->model('m_ebook');
        $baca = $this->m_ebook->baca_ebook($id_ebook);
        $data['baca'] = $baca;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('baca', $data);
        $this->load->view('templates/footer');
        
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['ebook'] = $this->m_ebook->get_keyword($keyword);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}