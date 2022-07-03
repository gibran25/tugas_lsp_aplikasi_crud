<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tokobuku extends CI_Controller {

    // Menginisiasi model "MainModel"
    public function __construct(){
		parent:: __construct();
		$this->load->model('MainModel');
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

        // Memanggil fungsi create pada model jika kondisi bernilai true
        if(isset($_POST['tambah'])){
            $this->MainModel->create();
        }
    }

    // Memanggil fungsi get_row pada model dan menampilkan halaman edit data
    public function edit($id){
        $data['record'] = $this->MainModel->get_row($id);
        $this->load->view('Header');
		$this->load->view('EditData', $data);
        $this->load->view('Footer');

        // Memanggil fungsi update pada model jika kondisi bernilai true
        if(isset($_POST['edit'])){
            $this->MainModel->update();
        }
    }

    // Memanggil fungsi delete pada model dan merefresh tampilan halaman 
    public function hapus($id){
        $this->MainModel->delete($id);
		redirect('','refresh');
    }
}