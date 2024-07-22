<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 5px solid #16B3AC;">
            <div class="container-fluid">
            <div class="ml-20" id="logoImage">
                    <img src="assets/img/icon/logoutama.png" height="55px" alt="Secondary Logo">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success  mx-2 <?= $this->uri->segment(1) == 'Dashboard' ? 'active' : '' ?>" href="<?= base_url('Dashboard'); ?>" style="font-family: 'Poppins', sans-serif;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success mx-2 <?= $this->uri->segment(1) == 'DataPasien' ? 'active' : '' ?>" href="<?= base_url('DataPasien'); ?>" style="font-family: 'Poppins', sans-serif;">Data Pasien</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success mx-2 <?= $this->uri->segment(1) == 'KirimPesan' ? 'active' : '' ?>" href="<?= base_url('KirimPesan'); ?>" style="font-family: 'Poppins', sans-serif;">Kirim Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success mx-2 <?= $this->uri->segment(1) == 'Profile' ? 'active' : '' ?>" href="<?= base_url('Profile'); ?>" style="font-family: 'Poppins', sans-serif;">Profile</a>
                        </li>
                        
                        
                    </ul>
                </div>
              
            </div>
        </nav>
        <!-- End of Topbar -->

<script>
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        const brandText = document.getElementById('brandText');
        const logoImage = document.getElementById('logoImage');
        if (brandText.style.display === 'none') {
            brandText.style.display = 'block';
            logoImage.style.display = 'block';
        } else {
            brandText.style.display = 'none';
            logoImage.style.display = 'none';
        }
    });

    document.addEventListener('click', function (event) {
        const isClickInside = document.querySelector('.navbar-toggler').contains(event.target);
        if (!isClickInside) {
            document.getElementById('brandText').style.display = 'block';
            document.getElementById('logoImage').style.display = 'block';
        }
    });
</script>
