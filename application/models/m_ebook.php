<?php

class M_ebook extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_ebook');
    }

    public function tambah_ebook($data, $table){
        $this->db->insert($table, $data);
    }

    public function input_ebook($data)
	{
		$this->db->insert('tb_ebook', $data);
    }

    public function edit_ebook($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function hapus_ebook($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_ebook($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detail_ebook($id_ebook = NULL){
        $query = $this->db->get_where('tb_ebook', array('id_ebook' => $id_ebook))->row();
        return $query;
    }

    public function baca_ebook($id_ebook = NULL){
        $query = $this->db->get_where('tb_ebook', array('id_ebook' => $id_ebook))->row();
        return $query;
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_ebook');
        $this->db->like('judul',$keyword);
        $this->db->or_like('penulis',$keyword);

        return $this->db->get()->result();
    }
}