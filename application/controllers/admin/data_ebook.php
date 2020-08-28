<?php

class Data_ebook extends CI_Controller{
    public function index(){
        $data['ebook'] = $this->m_ebook->tampil_data()->result();
        
        $this->load->view('admintemplates/header');
        $this->load->view('admintemplates/sidebar');
        $this->load->view('admin/data_ebook',$data);
        $this->load->view('admintemplates/footer');
    }

    public function tambah_aksi(){
        $files = $_FILES;

        $judul      = $this->input->post('judul');
        $penulis    = $this->input->post('penulis');
        $kategori   = $this->input->post('kategori');

            $config = array();
            $config ['upload_path'] = './uploads/img';
            $config ['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload',$config,'fotoupload');
            $this->fotoupload->initialize($config);
            $fotoupload = $this->fotoupload->do_upload('foto');
            
            $data1 = $this->fotoupload->data();

            $config = array();
            $config ['upload_path'] = './uploads/pdf';
            $config ['allowed_types'] = 'pdf';

            $this->load->library('upload',$config,'ebookupload');
            $this->fotoupload->initialize($config);
            $ebookupload = $this->ebookupload->do_upload('ebook');
        
        $data2 = $this->ebookupload->data();

        $foto = $data1['file_name'];
        $ebook = $data2['file_name'];






        // $foto       = $_FILES['foto']['name'];
        // if($foto === ''){}else{
        //     $config ['upload_path'] = './uploads/img';
        //     $config ['allowed_types'] = 'jpg|jpeg|png';

        //     $this->load->library('upload',$config);
        //     if(!$this->upload->do_upload('foto')){
        //         echo "Cover gagal diUpload!";
        //     }
        //     else{
        //         $foto = $this->upload->data('file_name');
        //     }
        // }

        // $ebook      = $_FILES['ebook']['name'];
        // if($ebook === ''){}else{
        //     $config ['upload_path'] = './uploads/pdf';
        //     $config ['allowed_types'] = 'pdf';

        //     $this->load->library('upload',$config);
        //     if(!$this->upload->do_upload('ebook')){
        //         echo "Ebook gagal diUpload!";
        //     }
        //     else{
        //         $ebook= $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'judul'     => $judul,
            'penulis'   => $penulis,
            'kategori'  => $kategori,
            'foto'      => $foto,
            'ebook'     => $ebook
        );
        
        // if($this->m_ebook->input_ebook($data, 'tb_ebook')){
        //     $this->session->set_flashdata("success","Berhasil menambahkan data Ebook");
        //     redirect('admin/data_ebook/index');
        // }
        // else{
        //     $this->session->set_flashdata("error","Gagal menambahkan data Ebook");
        //     redirect('admin/data_ebook/index');
        // }

        if($this->db->insert('tb_ebook',$data)){
            $this->session->set_flashdata("success","Berhasil menambahkan data Ebook");
            redirect('admin/data_ebook/index');
        }
        else{
            $this->session->set_flashdata("error","Berhasil menambahkan data Ebook");
            redirect('admin/data_ebook/index');
        }
    }

    public function edit($id_ebook){
        $where = array('id_ebook' => $id_ebook);
        $data['ebook'] = $this->m_ebook->edit_ebook($where,'tb_ebook')->result();

        $this->load->view('admintemplates/header');
        $this->load->view('admintemplates/sidebar');
        $this->load->view('admin/edit_ebook',$data);
        $this->load->view('admintemplates/footer');
    }

    public function hapus($id_ebook){
        $where = array ('id_ebook' => $id_ebook);
        $this->m_ebook->hapus_ebook($where, 'tb_ebook');
        redirect('admin/data_ebook/index');
    }
    
    public function update(){
        $id_ebook   = $this->input->post('id_ebook');

        $data=[
            'judul'     => $this->input->post('judul'),
            'penulis'   => $this->input->post('penulis'),
            'kategori'  => $this->input->post('kategori')
        ];

        $where = array(
            'id_ebook'  => $id_ebook
        );

        $this->m_ebook->update_ebook($where,$data,'tb_ebook');
        redirect('admin/data_ebook/index');
    }

    public function detail($id_ebook){
        $this->load->model('m_ebook');
        $detail = $this->m_ebook->detail_ebook($id_ebook);
        $data['detail'] = $detail;

        $this->load->view('admintemplates/header');
        $this->load->view('admintemplates/sidebar');
        $this->load->view('admin/detail_ebook',$data);
        $this->load->view('admintemplates/footer');
    }
    
}