<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uploads extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
    }

    public function index()
    {
        $data['title'] = 'Form Assessment';
        $this->load->view('tamplates/header', $data);
        $this->load->view('form_assessment/uploads/index');
        $this->load->view('tamplates/footer');
    }

    public function proses()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 2048;
        $config['max_height']           = 1000;
        $config['encrypt_name']         = true;
        $keterangan_nama = $this->input->post('nama_yang_mengajukan');
        $this->load->library('upload', $config);
        $jumlahFile = count($_FILES['foto_survey']['name']);
        for ($i = 0; $i < $jumlahFile; $i++) {

            if (!empty($_FILES['foto_survey']['name'][$i])) {
                # code...
                $_FILES['file']['name']      = $_FILES['foto_survey']['name'][$i];
                $_FILES['file']['type']      = $_FILES['foto_survey']['type'][$i];
                $_FILES['file']['tmp_name']  = $_FILES['foto_survey']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['foto_survey']['error'][$i];
                $_FILES['file']['size']      = $_FILES['foto_survey']['size'][$i];

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $data['nama_berkas'] = $uploadData['file_name'];
                    $data['keterangan_berkas'] = $keterangan_nama[$i];
                    $data['tipe_berkas'] = $uploadData['file_ext'];
                    $data['ukuran_berkas'] = $uploadData['file_size'];
                    $this->db->insert('tb_berkas', $data);
                    // $this->Form_model->upload($upload);
                }
            }
        }

        redirect('form/success');
    }
}
