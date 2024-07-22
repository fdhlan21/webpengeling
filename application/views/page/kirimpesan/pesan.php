<!-- Begin Page Content -->
<div class="container-fluid">
    <style>
        .custom-table-header {
            background-color: #60C0D0;
            color: #ffffff;
        }
    </style>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="text-success">Kirim Pesan</h3>
            <div>
                <a href="<?= base_url('/kirimpesan/add'); ?>" class="btn btn-secondary">Kembali</a>
                <a href="" class="btn btn-success">Kirim Pesan</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-success">
                            <th><input type="checkbox" id="select-all"></th>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>Telepon Ibu</th>
                            <th>Kategori</th>
                            <th>Instansi</th>
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

<script>
    // Script to handle the "select all" checkbox functionality
    document.getElementById('select-all').addEventListener('change', function(e) {
        var checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = e.target.checked;
        }
    });
</script>
