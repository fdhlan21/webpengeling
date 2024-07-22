<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/DataPasien'); ?>" style="color: black;">Data Pasien</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Pasien</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/DataPasien'); ?>" class="btn bg-secondary">
                <i class="fas fa-fw fa-arrow-left" style="color: #ffffff;"></i>
                <span style="color: #ffffff; padding-left: 10px;">Kembali</span>
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                <div>
                    <h2>IDENTITAS</h2>
                </div>
                <div class="form-group">
                    <label for="nama_pasien" class="text-success">Nama Lengkap Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir" class="text-success">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="usia" class="text-success">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" required>
                </div>
                <div class="form-group">
                    <label for="nama_wali" class="text-success">Nama Wali/Suami/Ayah Bayi</label>
                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" required>
                </div>
                <div class="form-group">
                    <label for="alamat_lengkap" class="text-success">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="telepon" class="text-success">Telepon</label>
                    <input type="number" class="form-control" id="telepon" name="telepon" required>
                </div>
                <div class="form-group">
                    <label for="kategori" class="text-success">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="ibuhamil">Ibu Hamil</option>
                        <option value="ibunifas">Ibu Nifas</option>
                        <option value="ibubalita">Ibu Balita</option>
                        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                    </select>
                </div>
                <div>
                    <h2>RIWAYAT PEMERIKSAAN</h2>
                </div>
                <div class="form-group">
                    <label for="tanggal_pemeriksaan" class="text-success">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" required>
                </div>
                <div class="form-group">
                    <label for="jam_pemeriksaan" class="text-success">Jam</label>
                    <input type="time" class="form-control" id="jam_pemeriksaan" name="jam_pemeriksaan" required>
                </div>
                <div class="form-group">
                    <label for="tempat_pemeriksaan" class="text-success">Tempat Terakhir Pemeriksaan</label>
                    <input type="text" class="form-control" id="tempat_pemeriksaan" name="tempat_pemeriksaan" required>
                </div>
                <div class="form-group">
                    <label for="diagnosa" class="text-success">Diagnosa Pemeriksaan</label>
                    <input type="text" class="form-control" id="diagnosa" name="diagnosa" required>
                </div>
                <div class="form-group">
                    <label for="riwayat_obstetri" class="text-success">Riwayat Obstetri</label>
                    <input type="text" class="form-control" id="riwayat_obstetri" name="riwayat_obstetri" required>
                </div>
                <div class="form-group">
                    <label for="tanda_vital" class="text-success">Hasil Pemeriksaan Tanda-Tanda Vital</label>
                    <input type="text" class="form-control" id="tanda_vital" name="tanda_vital" required>
                </div>
                <div class="form-group">
                    <label for="berat_badan" class="text-success">Pemeriksaan Berat Badan</label>
                    <input type="text" class="form-control" id="berat_badan" name="berat_badan" required>
                </div>
                <div class="form-group">
                    <label for="tinggi_badan" class="text-success">Pemeriksaan Tinggi Badan</label>
                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                </div>
                <div class="form-group">
                    <label for="pemeriksaan_lila" class="text-success">Pemeriksaan Lila</label>
                    <input type="text" class="form-control" id="pemeriksaan_lila" name="pemeriksaan_lila" required>
                </div>
                <div class="form-group">
                    <label for="pemeriksaan_lk" class="text-success">Pemeriksaan LK</label>
                    <input type="text" class="form-control" id="pemeriksaan_lk" name="pemeriksaan_lk" required>
                </div>
                <div class="form-group">
                    <label for="pemeriksaan_lp" class="text-success">Pemeriksaan LP</label>
                    <input type="text" class="form-control" id="pemeriksaan_lp" name="pemeriksaan_lp" required>
                </div>
                <div class="form-group">
                    <label for="pemeriksaan_ld" class="text-success">Pemeriksaan LD</label>
                    <input type="text" class="form-control" id="pemeriksaan_ld" name="pemeriksaan_ld" required>
                </div>
                <div class="form-group">
                    <label for="pemeriksaan_tfu" class="text-success">Pemeriksaan TFU</label>
                    <input type="text" class="form-control" id="pemeriksaan_tfu" name="pemeriksaan_tfu" required>
                </div>
                <div class="form-group">
                    <label for="riwayat_pengobatan" class="text-success">Riwayat Pengobatan Sebelumnya</label>
                    <input type="text" class="form-control" id="riwayat_pengobatan" name="riwayat_pengobatan" required>
                </div>
                <div class="form-group">
                    <label for="hasil_laboratorium" class="text-success">Hasil Laboratorium Terakhir</label>
                    <input type="text" class="form-control" id="hasil_laboratorium" name="hasil_laboratorium" required>
                </div>
                <div class="form-group">
                    <label for="hpht" class="text-success">HPHT</label>
                    <input type="text" class="form-control" id="hpht" name="hpht" required>
                </div>
                <div class="form-group">
                    <label for="tgl_perkiraan_persalinan" class="text-success">Tanggal Perkiraan Persalinan</label>
                    <input type="date" class="form-control" id="tgl_perkiraan_persalinan" name="tgl_perkiraan_persalinan" required>
                </div>
                <div class="form-group">
                    <label for="usia_kehamilan" class="text-success">Usia Kehamilan Saat Ini</label>
                    <input type="number" class="form-control" id="usia_kehamilan" name="usia_kehamilan" required>
                </div>
                <div class="form-group">
                    <label for="golongan_darah" class="text-success">Golongan Darah</label>
                    <select class="form-control" id="golongan_darah" name="golongan_darah" required>
                        <option value="">Pilih golongan darah</option>
                        <option value="o+">O+</option>
                        <option value="a+">A+</option>
                        <option value="b+">B+</option>
                        <option value="ab+">AB+</option>
                        <option value="o-">O-</option>
                        <option value="a-">A-</option>
                        <option value="b-">B-</option>
                        <option value="ab-">AB-</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success form-control" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
