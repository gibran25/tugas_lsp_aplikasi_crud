<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {
    
    // Membaca data pada tabel yang sebelumnya telah diurutkan secara ascending berdasarkan judul buku
    function read(){
        $this->db->order_by('judul_buku','asc');
        return $this->db->get('data_buku')->result_array();
    }

    // Mendapatkan record data berdasarkan nilai id data
    function get_row($id){
        return $this->db->get_where('data_buku', ['id' => $id])->row_array();
    }
    
    // Membuat record data baru pada tabel 
    function create(){
        $data = [
            'judul_buku' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'jenis' => $this->input->post('jenis'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'penerbit' => $this->input->post('penerbit'),
            'harga' => $this->input->post('harga'),
        ];
        $this->db->insert('data_buku', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan','Ditambah');
            redirect('', 'refresh');
        }
    }

    // Mengubah record data berdasarkan nilai id yang dipost 
    function update(){
        $data = [
            'judul_buku' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'jenis' => $this->input->post('jenis'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'penerbit' => $this->input->post('penerbit'),
            'harga' => $this->input->post('harga'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_buku', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan','Diubah');
            redirect('', 'refresh');
        }
    }

    // Menghapus record data berdasarkan nilai id
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('data_buku');
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan','Dihapus');
            redirect('', 'refresh');
        }
    }

}