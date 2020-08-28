<?php

class M_kategori extends CI_Model{

    public function data_umum(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'umum'));
    }

    public function data_pemasaran(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'pemasaran'));
    }

    public function data_pariwisata(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'pariwisata'));
    }

    public function data_peternakan(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'peternakan'));
    }

    public function data_motivasi(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'motivasi'));
    }
}