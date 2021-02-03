<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Form Assessment Yayasan Askar Kauny!</h1>
                                </div>
                                <?php if ($error !== null) :
                                    echo $error;
                                endif;  ?>
                                <!-- Yang Mengajukan -->
                                <div class="text-center">
                                    <h5 class="">Yang Mengajukan</h5>
                                </div>
                                <hr>
                                <?= form_open_multipart('form'); ?>
                                <div class="form-group">
                                    <label for="nama_yang_mengajukan">Nama</label>
                                    <input type="text" class="form-control" id="nama_yang_mengajukan" name="nama_yang_mengajukan" placeholder="Masukan Nama Lengkap">
                                    <?= form_error('nama_yang_mengajukan', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
                                </div>
                                <div class="form-group">
                                    <label for="no_whatsapp">No. WhatsApp</label>
                                    <input type="number" class="form-control" id="no_whatsapp" name="no_whatsapp" placeholder="Masukan No. WhatsApp">
                                    <?= form_error('no_whatsapp', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <!-- Kependudukan -->
                                <div class="text-center">
                                    <h5 class="">Kependudukan</h5>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" placeholder="Masukan Nama Lengkap">
                                    <?= form_error('nama_kepala_keluarga', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Rumah">
                                    <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="Kelurahan">Kelurahan</label>
                                    <input type="text" class="form-control" id="Kelurahan" name="kelurahan" placeholder="Masukan Kelurahan">
                                    <?= form_error('kelurahan', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="Kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" id="Kecamatan" name="kecamatan" placeholder="Masukan Kecamatan">
                                    <?= form_error('kecamatan', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="Kota">Kota</label>
                                    <input type="text" class="form-control" id="Kota" name="kota" placeholder="Masukan Kota Saat Ini">
                                    <?= form_error('kota', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">No. Telp</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan No. Telp">
                                    <?= form_error('no_telp', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="agama_saat_lahir">Agama Saat Lahir</label>
                                    <select class="form-control " id="agama_saat_lahir" name="agama_saat_lahir">
                                        <option>Pilihan</option>
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katholik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                        <option>Atheis</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama_saat_ini">Agama Saat Ini</label>
                                    <select class="form-control " id="agama_saat_ini" name="agama_saat_ini">
                                        <option>Pilihan</option>
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katholik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                        <option>Atheis</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control " id="jenis_kelamin" name="jenis_kelamin">
                                        <option>Perempuan</option>
                                        <option>Laki-Laki</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                                    <?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
                                    <?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <select class="form-control " id="pendidikan_terakhir" name="pendidikan_terakhir">
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>D3/S1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <select class="form-control " id="pekerjaan" name="pekerjaan">
                                        <option>Pilihan</option>
                                        <option>BUMN</option>
                                        <option>PNS</option>
                                        <option>Pengusaha</option>
                                        <option>Karyawan</option>
                                        <option>Buruh Tani</option>
                                        <option>Buruh Kasar</option>
                                        <option>Buruh Sopr</option>
                                        <option>Frelancer</option>
                                        <option>Tidak Bekerja</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status_pernikahan">Status Pernikahan</label>
                                    <select class="form-control " id="status_pernikahan" name="status_pernikahan">
                                        <option>Menikah</option>
                                        <option>Belum Menikah</option>
                                        <option>Janda</option>
                                        <option>Duda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penghasilan_perbulan">Penghasilan/Bulan</label>
                                    <select class="form-control " id="penghasilan_perbulan" name="penghasilan_perbulan">
                                        <option>
                                            < Rp. 1 Juta</option>
                                        <option>> Rp. 1 Juta
                                        </option>
                                        <option>
                                            < Rp. 2 Juta</option>
                                        <option>> Rp. 3 Juta
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penghasilan_perkapita">Penghasilan Perkapita</label>
                                    <select class="form-control " id="penghasilan_perkapita" name="penghasilan_perkapita">
                                        <option>
                                            < Rp. 8 Juta</option>
                                        <option>
                                            < Rp. 12 Juta</option>
                                        <option>
                                            < Rp. 24 Juta</option>
                                        <option>> Rp. 36 Juta
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kategori_rumah">Kategori Rumah</label>
                                    <select class="form-control " id="kategori_rumah" name="kategori_rumah">
                                        <option>Sewa</option>
                                        <option>Dengan Keluarga</option>
                                        <option>Asrama/Panti</option>
                                        <option>Rumah Sendiri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_tinggal">Tempat Tinggal</label>
                                    <select class="form-control " id="tempat_tinggal" name="tempat_tinggal">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Tidak Layak Huni</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kondisi_rumah">Kondisi Rumah</label>
                                    <select class="form-control " id="kondisi_rumah" name="kondisi_rumah">
                                        <option>Permanen</option>
                                        <option>Semi Permanen</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kesehatan">Kesehatan</label>
                                    <select class="form-control " id="kesehatan" name="kesehatan">
                                        <option>Sehat</option>
                                        <option>Sakit</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sebutkan_penyakitnya">Jika Sakit, Sebutkan Penyakitnya?</label>
                                    <input type="text" class="form-control" id="sebutkan_penyakitnya" name="sebutkan_penyakitnya" placeholder="Jenis Penyakit">
                                </div>
                                <div class="form-group">
                                    <label for="peralatan_rumah_tangga">Peralatan Rumah Tangga</label>
                                    <input type="text" class="form-control" id="peralatan_rumah_tangga" name="peralatan_rumah_tangga" placeholder="Masukan Peralatan Rumah Tangga">
                                </div>
                                <div class="form-group">
                                    <label for="kendaraan_yang_dimiliki">Kendaraan Yang Dimiliki</label>
                                    <select class="form-control " id="kendaraan_yang_dimiliki" name="kendaraan_yang_dimiliki">
                                        <option>Tidak Punya</option>
                                        <option>Motor</option>
                                        <option>Mobil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tangggungan">Tanggungan/Hutang</label>
                                    <select class="form-control " id="tangggungan" name="tanggungan">
                                        <option>Punya</option>
                                        <option>Tidak Punya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                                    <input type="number" class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan" placeholder="Masukan Jumlah Tanggungan">
                                    <?= form_error('jumlah_tanggungan', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nominal_tanggungan">Nominal Tanggungan</label>
                                    <input type="text" class="form-control" id="nominal_tanggungan" name="nominal_tanggungan" placeholder="Masukan Nominal Tanggungan">
                                </div>
                                <div class="form-group">
                                    <label for="alasan_berhutang">Alasan Berhutang</label>
                                    <input type="text" class="form-control" id="alasan_berhutang" name="alasan_berhutang" placeholder="Alasan Berhutang">
                                </div>
                                <div class="text-center">
                                    <h5 class="">Demografi Penduduk</h5>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="jumlah_quran_dirumah">Jumlah Al-Qur'an dirumah</label>
                                    <select class="form-control " id="jumlah_quran_dirumah" name="jumlah_quran_dirumah">
                                        <option>
                                            < 2</option>
                                        <option>
                                            < 4</option>
                                        <option> > 4
                                        </option>
                                        <option>Tidak Punya
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kondisi_quran_dirumah">Kondisi Al-Qur'an dirumah</label>
                                    <select class="form-control " id="kondisi_quran_dirumah" name="kondisi_quran_dirumah">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Tidak Layak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_mukena_dirumah">Jumlah Mukena dirumah</label>
                                    <select class="form-control " id="jumlah_mukena_dirumah" name="jumlah_mukena_dirumah">
                                        <option>
                                            < 2 </option>
                                        <option>
                                            < 4 </option>
                                        <option>> 4
                                        </option>
                                        <option>Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kondisi_mukena_dirumah">Kondisi Mukena dirumah</label>
                                    <select class="form-control " id="kondisi_mukena_dirumah" name="kondisi_mukena_dirumah">
                                        <option>Baik</option>
                                        <option>Sedang</option>
                                        <option>Tidak Layak</option>
                                        <option>Tidak Punya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dapatkah_membaca_quran">Dapatkah Membaca Al Qur'an</label>
                                    <select class="form-control " id="dapatkah_membaca_quran" name="dapatkah_membaca_quran">
                                        <option>iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_mempunyai_hafalan_surat">Apakah Mempunyai Hafalan Surat</label>
                                    <select class="form-control " id="apakah_mempunyai_hafalan_surat" name="apakah_mempunyai_hafalan_surat">
                                        <option>Punya</option>
                                        <option>Tidak Punya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_sedang_hamil">Apakah Sedang Hamil</label>
                                    <select class="form-control " id="apakah_sedang_hamil" name="apakah_sedang_hamil">
                                        <option>Iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_memiliki_penyakit_khusus">Apakah Memiliki Penyakit Khusus</label>
                                    <select class="form-control " id="apakah_memiliki_penyakit_khusus" name="apakah_memiliki_penyakit_khusus">
                                        <option>Iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_penyakit">Jika Ada, Sebutkan Penyakitnya?</label>
                                    <input type="text" class="form-control" id="jenis_penyakit" name="jenis_penyakit" placeholder="Jika Ada, Sebutkan Penyakitnya">
                                </div>
                                <div class="form-group">
                                    <label for="pernah_kambuh_dalam_waktu_dekat">Pernah Kambuh Dalam Waktu dekat</label>
                                    <select class="form-control " id="pernah_kambuh_dalam_waktu_dekat" name="pernah_kambuh_dalam_waktu_dekat">
                                        <option>Pernah</option>
                                        <option>Tidak Pernah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_memiliki_mck_dirumah">Apakah Memiliki MCK dirumah</label>
                                    <select class="form-control " id="apakah_memiliki_mck_dirumah" name="apakah_memiliki_mck_dirumah">
                                        <option>Punya</option>
                                        <option>Tidak Punya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kondisi_mck">Kondisi MCK</label>
                                    <select class="form-control " id="kondisi_mck" name="kondisi_mck">
                                        <option>Baik</option>
                                        <option>Sedan</option>
                                        <option>Tidak Baik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sumber_air">Sumber Air</label>
                                    <select class="form-control " id="sumber_air" name="sumber_air">
                                        <option>PAM</option>
                                        <option>Sumur</option>
                                        <option>Air Gunung</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_memiliki_sanitasi_yang_baik">Apakah Memiliki Sanitasi Yang Baik</label>
                                    <select class="form-control " id="apakah_memiliki_sanitasi_yang_baik" name="apakah_memiliki_sanitasi_yang_baik">
                                        <option>Iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_memiliki_usaha">Apakah Memiliki Usaha/Warung</label>
                                    <select class="form-control " id="apakah_memiliki_usaha" name="apakah_memiliki_usaha">
                                        <option>Punya</option>
                                        <option>Tidak Punya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_usaha">Jenis Usaha</label>
                                    <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" placeholder="Jenis Usaha">
                                </div>
                                <div class="form-group">
                                    <label for="omset_tiap_bulan">Omset Tiap Bulan</label>
                                    <select class="form-control " id="omset_tiap_bulan" name="omset_tiap_bulan">
                                        <option>
                                            < 1 Juta</option>
                                        <option>
                                            < 3 Juta</option>
                                        <option>> 3 Juta
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="makan_sehari_berapaKali">Makan Sehari Berapakali</label>
                                    <select class="form-control " id="makan_sehari_berapaKali" name="makan_sehari_berapakali">
                                        <option> 1 Kali</option>
                                        <option> 2 Kali</option>
                                        <option> 3 Kali</option>
                                        <option> 4 Kali</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apakah_anda_minum_susu">Apakah Anda Minum Susu</label>
                                    <select class="form-control " id="apakah_anda_minum_susu" name="apakah_anda_minum_susu">
                                        <option>Iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="makanBuah">Berapa Kali Makan Buah Dalam Sepekan</label>
                                    <select class="form-control " id="berapakali_makan_buah_dalam_sepekan" name="berapakali_makan_buah_dalam_sepekan">
                                        <option>1 Kali</option>
                                        <option>2 Kali</option>
                                        <option>3 Kali</option>
                                        <option>4 Kali</option>
                                        <option>Tidak Sama Sekali</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="berat_badan">Berat Badan</label>
                                    <input type="text" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat Badan">
                                </div>
                                <div class="form-group">
                                    <label for="tinggi_badan">Tinggi Badan</label>
                                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan">
                                </div>
                                <div class="form-group">
                                    <label for="apakah_anggota_keluarga_memiliki_disabilitas">Apakah Anggota Keluarga Memiliki di Sabilitas?</label>
                                    <select class="form-control " id="apakah_anggota_keluarga_memiliki_disabilitas" name="apakah_anggota_keluarga_memiliki_disabilitas">
                                        <option>Iya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_anggota_keluarga">Nama Anggota Keluarga</label>
                                    <input type="text" class="form-control" id="nama_anggota_keluarga" name="nama_anggota_keluarga" placeholder="Nama Anggota Keluarga">
                                </div>
                                <div class="form-group">
                                    <label for="sejak_kapan_mengalami_disabilitas">Sejak Kapan Mengalami di Sabilitas?</label>
                                    <input type="text" class="form-control" id="sejak_kapan_mengalami_disabilitas" name="sejak_kapan_mengalami_disabilitas" placeholder="Sejak Kapan Memiliki di Sabilitas?">
                                </div>
                                <div class="form-group">
                                    <label for="dikarenakan_apa">Di Karenakan Apa?</label>
                                    <input type="text" class="form-control" id="dikarenakan_apa" name="dikarenakan_apa" placeholder="Di Karenakan Apa?">
                                </div>
                                <div class="div form-group">
                                    <label for="bukti_foto">Kirim Foto Survey</label>
                                    <input type="file" name="bukti_foto">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Kirim">
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>