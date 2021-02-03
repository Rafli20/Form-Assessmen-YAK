<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_form');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama_yang_mengajukan', 'Nama Yang Mengajukan', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'valid_email');
        // $this->form_validation->set_rules('no_whatsapp', 'No. WhatsApp', 'min_length');
        $this->form_validation->set_rules('nama_kepala_keluarga', 'Nama Kepala Keluarga', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No. Telp', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jumlah_tanggungan', 'Jumlah Tanggungan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Assessment';
            $data['error'] = '';
            $this->load->view('tamplates/header', $data);
            $this->load->view('form_assessment/index', $data);
            $this->load->view('tamplates/footer');
        } else {
            // Jika berhasil Maka insert Data Form
            $config['upload_path']   = './assets/img/';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['max_size']      = '2048';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('bukti_foto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('form_assessment/index', $error);
            } else {
                $upload_data = $this->upload->data();

                $insert = $this->M_form->insertDataForm($upload_data);

                if ($insert) {
                    redirect('form/success');
                } else {
                    echo 'gagal';
                }
            }
        }
    }

    public function success()
    {
        $data['title'] = 'Form Assessment';
        $this->load->view('tamplates/header', $data);
        $this->load->view('form_assessment/success');
        $this->load->view('tamplates/footer');
    }
}
