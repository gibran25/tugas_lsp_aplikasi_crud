<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tokobuku extends CI_Controller {

    // Menginisiasi model, library, dan helper
    public function __construct(){
		parent:: __construct();
		$this->load->model('MainModel');
        $this->load->library('form_validation');
        $this->load->helper('form');
	}

    // Memanggil fungsi read pada model dan menampilkan halaman home
    public function index(){
        $data['record'] = $this->MainModel->read();
        $this->load->view('Header');
		$this->load->view('Home', $data);
        $this->load->view('Footer');
    }

    // Menampilkan halaman tambah data
    public function tambah(){
        $this->load->view('Header');
		$this->load->view('TambahData');
        $this->load->view('Footer');

        // Menentukan aturan validasi untuk field tahun terbit dan harga
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'trim|required|numeric');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');

        /* Memanggil fungsi create pada model jika kondisi bernilai true
           jika tidak, maka akan muncul pesan validasi error*/
        if(isset($_POST['tambah'])){
            if ($this->form_validation->run() == true) {
                $this->MainModel->create();
			} else {
				$this->session->set_flashdata('announce', validation_errors());
                redirect('tambah');
			}
        }
    }

    // Memanggil fungsi get_row pada model dan menampilkan halaman edit data
    public function edit($id){
        $data['record'] = $this->MainModel->get_row($id);
        $this->load->view('Header');
		$this->load->view('EditData', $data);
        $this->load->view('Footer');

        // Menentukan aturan validasi untuk field tahun terbit dan harga
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'trim|required|numeric');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');

        /* Memanggil fungsi update pada model jika kondisi bernilai true
           jika tidak, maka akan muncul pesan validasi error*/
        if(isset($_POST['edit'])){
            if ($this->form_validation->run() == true) {
                $this->MainModel->update();
			} else {
				$this->session->set_flashdata('announce', validation_errors());
                redirect('edit/'.$id);
			}
        }
    }

    // Memanggil fungsi delete pada model dan merefresh tampilan halaman 
    public function hapus($id){
        $this->MainModel->delete($id);
		redirect('','refresh');
    }
}