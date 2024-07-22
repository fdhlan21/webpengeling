<!-- Begin Page Content -->


<!-- DI BUTTON SELANJUTNYA NANTI NAVIGATE KE PESAN DAN MENGAMBIL DATA DARI ADD -->

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/KirimPesan'); ?>" style="color: black;">Kirim Pesan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kirim Pesan</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/KirimPesan'); ?>" class="btn bg-secondary">
                <i class="fas fa-fw fa-arrow-left" style="color: #ffffff;"></i>
                <span style="color: #ffffff; padding-left: 10px;">Kembali</span>
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="judulpesan" class="text-success">Judul Pesan</label>
                    <input type="text" class="form-control" id="judulpesan" name="judulpesan" placehorder="Masukan Judul Pesan" required >
                </div>
                <div class="form-group">
                    <label for="isipesan" class="text-success">Isi Pesan</label>
                   <textarea name="isipesan" id="isipesan" class="form-control" row="5" placehorder="Masukan Isi Pesan" require></textarea>
                </div>
              

                <button type="submit" class="btn btn-success form-control">Selanjutnya</button>
            </form>
        </div>
    </div>
</div>
