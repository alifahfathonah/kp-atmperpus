<?php

class M_user extends CI_Model{
    public function tampil(){
        return $this->db->where('id_user',$this->session->userdata('id_user'));
    }
}