<?php defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_m extends CI_Model
{


    public function add()
    {


        $file = $this->upload->do_upload('uploading');

        if ($file) {
            echo "if terjalankan";
            $data = $this->upload->data();

            $file = $data['file_name'];
        } else {
            echo "else terjalankan";
            $file = 'default.jpg';
        }



        $data = array(
            'id_info' => NULL,
            'judul' => $this->input->post('judul'),
            'detail' => $this->input->post('detail'),
            'email' => $this->input->post('email'),
            'tanggal' => $this->input->post('tanggal'),
            'file' => $file,
            'jenis' => $this->input->post('jenis'),
            'kualitas' => $this->input->post('pilihan')

        );
        $this->db->insert('pemesanan', $data);
        return  $this->session->set_flashdata('success', 'Berhasil Disimpan');
    }
    public function getAll($id = null)
    {
        if ($id === null) {
            $query = $this->db->get('pemesanan');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('pemesanan', array('id_info' => $id));

            return $query->result_array();
        }
    }

    public function update($id = NULL)
    {
        $file = $this->upload->do_upload('uploading');

        if ($file) {
            echo "if terjalankan";
            $data = $this->upload->data();

            $file = $data['file_name'];
        } else {
            echo "else terjalankan";
            $file = 'default.jpg';
        }



        $data = array(
            'id_info' => $id,
            'judul' => $this->input->post('judul'),
            'detail' => $this->input->post('detail'),
            'email' => $this->input->post('email'),
            'tanggal' => $this->input->post('tanggal'),
            'file' => $file,
            'jenis' => $this->input->post('jenis'),
            'kualitas' => $this->input->post('pilihan')

        );
        $this->db->update('pemesanan', $data, array('id_info' => $id));
        return $this->session->set_flashdata('success', 'Berhasil diupdate');
    }
    public function delete($id = NULL)
    {
        return $this->db->delete('pemesanan', array('id_info' => $id));
    }
}
