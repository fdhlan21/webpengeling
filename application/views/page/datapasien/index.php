<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="text-success">Data Pasien</h3>
            <a href="<?= base_url('/datapasien/add'); ?>" class="btn btn-success">Tambah Data Pasien</a>
        </div>
        <div class="card-body">
            <div class="table-container">
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr class="table-success">
                            <th class="">No</th>
                            <th class="">Nama Lengkap Pasien</th>
                            <th class="">Tanggal Lahir</th>
                            <th class="">Usia</th>
                            <th class="">Nama Wali/Suami/Ayah Bayi</th>
                            <th class="">Alamat Lengkap</th>
                            <th class="">Telepon</th>
                            <th class="">Kategori</th>
                            <th class="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- backend -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
