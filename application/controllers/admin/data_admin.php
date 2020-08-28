<?php

class Data_admin extends CI_Controller{
    public function index(){
        $data['admin'] = $this->m_admin->tampil_data()->result();
        $this->load->view('admintemplates/header');
        $this->load->view('admintemplates/sidebar');
        $this->load->view('admin/data_admin',$data);
        $this->load->view('admintemplates/footer');
    }
}