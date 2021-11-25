<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('informasi_m');

    }

    // List all your items
    public function index( $offset = 0 )
    {
        $data['informasi'] = $this->informasi_m->getAll();
        
        $this->load->view('informasi/listinformasi', $data);
        

    }
    public function input()
    {
        $this->load->view('informasi/informasi');
    }

    // Add a new item
    public function add()
    {
        // Configurasi File
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->upload->initialize($config);
        $this->informasi_m->add();


    }

    //Update one item
    public function update( $id = NULL )
    {
        // Configurasi File
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // Mengatur ukuran maksimal file
        $config['max_size'] = '2048';
        // mengatur ukuran lebar maksimal yang dilakukan
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->upload->initialize($config);
        $this->informasi_m->update();

    }

    //Delete one item
    public function delete( $id = NULL )
    {
        print_r($id);
        $this->Bukuproduk_m->delete($id);
        $this->session->set_flashdata('success', 'Berhasil dihapus');
        redirect('Bukuproduk_c/index');

    }
}

/* End of file Controllername.php */
