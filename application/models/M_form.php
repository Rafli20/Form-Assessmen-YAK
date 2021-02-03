<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_form extends CI_Model
{
    public function insertDataForm($upload_data)
    {

        $data = [
            'nama_yang_mengajukan'      => $this->input->post('nama_yang_mengajukan'),
            'email'                     => $this->input->post('email'),
            'no_whatsapp'               => $this->input->post('no_whatsapp'),
            'nama_kepala_keluarga'      => $this->input->post('nama_kepala_keluarga'),
            'alamat'                    => $this->input->post('alamat'),
            'kelurahan'                 => $this->input->post('kelurahan'),
            'kecamatan'                 => $this->input->post('kecamatan'),
            'kota'                      => $this->input->post('kota'),
            'no_telp'                   => $this->input->post('no_telp'),
            'agama_saat_lahir'          => $this->input->post('agama_saat_lahir'),
            'agama_saat_ini'            => $this->input->post('agama_saat_ini'),
            'jenis_kelamin'             => $this->input->post('jenis_kelamin'),
            'tempat_lahir'              => $this->input->post('tempat_lahir'),
            'tanggal_lahir'             => $this->input->post('tanggal_lahir'),
            'pendidikan_terakhir'       => $this->input->post('pendidikan_terakhir'),
            'pekerjaan'                 => $this->input->post('pekerjaan'),
            'status_pernikahan'         => $this->input->post('status_pernikahan'),
            'penghasilan_perbulan'      => $this->input->post('penghasilan_perbulan'),
            'penghasilan_perkapita'     => $this->input->post('penghasilan_perkapita'),
            'kategori_rumah'            => $this->input->post('kategori_rumah'),
            'tempat_tinggal'            => $this->input->post('tempat_tinggal'),
            'kondisi_rumah'             => $this->input->post('kondisi_rumah'),
            'sebutkan_penyakitnya'      => $this->input->post('sebutkan_penyakitnya'),
            'kesehatan'                 => $this->input->post('kesehatan'),
            'peralatan_rumah_tangga'    => $this->input->post('peralatan_rumah_tangga'),
            'kendaraan_yang_dimiliki'   => $this->input->post('kendaraan_yang_dimiliki'),
            'tanggungan'                => $this->input->post('tanggungan'),
            'jumlah_tanggungan'         => $this->input->post('jumlah_tanggungan'),
            'nominal_tanggungan'        => $this->input->post('nominal_tanggungan'),
            'alasan_berhutang'          => $this->input->post('alasan_berhutang'),
            'jumlah_quran_dirumah'      => $this->input->post('jumlah_quran_dirumah'),
            'kondisi_quran_dirumah'     => $this->input->post('kondisi_quran_dirumah'),
            'jumlah_mukena_dirumah'     => $this->input->post('jumlah_mukena_dirumah'),
            'kondisi_mukena_dirumah'    => $this->input->post('kondisi_mukena_dirumah'),
            'dapatkah_membaca_quran'    => $this->input->post('dapatkah_membaca_quran'),
            'apakah_mempunyai_hafalan_surat'  => $this->input->post('apakah_mempunyai_hafalan_surat'),
            'apakah_sedang_hamil'             => $this->input->post('apakah_sedang_hamil'),
            'apakah_memiliki_penyakit_khusus' => $this->input->post('apakah_memiliki_penyakit_khusus'),
            'jenis_penyakit'                  => $this->input->post('jenis_penyakit'),
            'pernah_kambuh_dalam_waktu_dekat' => $this->input->post('pernah_kambuh_dalam_waktu_dekat'),
            'apakah_memiliki_mck_dirumah'     => $this->input->post('apakah_memiliki_mck_dirumah'),
            'kondisi_mck'                     => $this->input->post('kondisi_mck'),
            'sumber_air'                      => $this->input->post('sumber_air'),
            'apakah_memiliki_sanitasi_yang_baik' => $this->input->post('apakah_memiliki_sanitasi_yang_baik'),
            'apakah_memiliki_usaha'              => $this->input->post('apakah_memiliki_usaha'),
            'jenis_usaha'                        => $this->input->post('jenis_usaha'),
            'omset_tiap_bulan'                   => $this->input->post('omset_tiap_bulan'),
            'apakah_anda_minum_susu'             => $this->input->post('apakah_anda_minum_susu'),
            'berapakali_makan_buah_dalam_sepekan'          => $this->input->post('berapakali_makan_buah_dalam_sepekan'),
            'berat_badan'                                  => $this->input->post('berat_badan'),
            'tinggi_badan'                                 => $this->input->post('tinggi_badan'),
            'apakah_anggota_keluarga_memiliki_disabilitas' => $this->input->post('apakah_anggota_keluarga_memiliki_disabilitas'),
            'nama_anggota_keluarga'                        => $this->input->post('nama_anggota_keluarga'),
            'sejak_kapan_mengalami_disabilitas'            => $this->input->post('sejak_kapan_mengalami_disabilitas'),
            'dikarenakan_apa'                              => $this->input->post('dikarenakan_apa'),
            'bukti_foto'                                   => $upload_data['file_name'],
            'ukuran_foto'                                  => $upload_data['file_size'],
            'tipe_foto'                                    => $upload_data['file_type'],
            'date_created'                                 => time()
        ];

        return $this->db->insert('form_assessment', $data);
    }
}
