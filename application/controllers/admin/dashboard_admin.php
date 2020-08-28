<?php

class Dashboard_admin extends CI_Controller{
    public function index(){
        if($this->session->userdata('login') == TRUE){
            $this->load->view('admintemplates/header');
            $this->load->view('admintemplates/sidebar');
            $this->load->view('admin/dashboard_admin');
            $this->load->view('admintemplates/footer');
        }
        else{
            redirect('admin/auth');
        }
    }

    public function profil(){
        // $where = array('id_ebook' => $id_ebook);
        $where = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user',$where);
        
        $this->load->view('admintemplates/header');
        $this->load->view('admintemplates/sidebar');
        $this->load->view('admin/profil',$data);
        $this->load->view('admintemplates/footer');
    }

    public function update_profil(){
        $id_user   = $this->input->post('id_user');

        $nama      = $this->input->post('$nama');
        $username  = $this->input->post('$username');
        $password  = $this->input->post('$password');
        $password2 = $this->input->post('$password2');
        $photo     = $_FILES['photo']['name'];
        $config ['upload_path']     = './uploads/profil';
        $config ['allowed_types']   = 'jpg|jpeg|png';
        $this->load->library('upload',$config);
        $photo = $this->upload->data('file_name');

        $data = array(
            'nama'      => $nama,
            'username'  => $username,
            'password'  => $password,
            'password2' => $password2,
            'photo'     => $photo
        );

        $where = array(
            'id_user'  => $id_user
        );
        if($password != $password2){
            $this->session->set_flashdata("error","Gagal memperbarui Profil, password tidak sama");
            redirect('admin/data_ebook/index');
        }
        else{
            $this->m_user->update_profil($where,$data,'tb_user');
            redirect('admin/dashboard_admin');
        } 
    }
}