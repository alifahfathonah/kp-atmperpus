<?php

class AuthModel extends CI_Model{
    public function cek($in){
        $this->load->library('session');
        
        $username = $this->db->escape($in['username']);
        $password =  $this->db->escape($in['password']);

        $q_login = $this->db->query("SELECT * FROM tb_user WHERE username = $username AND password = $password");
        if($q_login->num_rows()>0){
            foreach($q_login->result() as $data){
                $session['id'] = $data->id;
                $session['username'] = $data->username;
                $session['password'] = $data->password;

                $session['login'] = TRUE;
                $this->session->set_userdata($session);
            }   
        }
        if($session['login'] == TRUE){
            redirect('admin/dashboard_admin');
        }  
        else{
            redirect('admin/Auth');
        }
    }
}