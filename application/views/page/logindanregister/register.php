<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <!-- Add Google Font Poppins -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* General styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('/assets/img/icon/bglogin.png'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 100px;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            width: 100%;
       
        }

        .register-card h2 {
            text-align: center;
            color: #26a69a;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input[type="checkbox"] {
            margin-right: 10px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #26a69a;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2bbbad;
        }

        p {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        p a {
            color: #26a69a;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .register-container {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="register-container">
            <div class="register-card">
                <h2>Daftar</h2>
                <form method="POST" action="<?= base_url('login/register'); ?>">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap...">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan Username...">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat...">
                    </div>
                    <div class="form-group">
                        <label for="kategori_instansi">Kategori Instansi</label>
                        <input type="text" id="kategori_instansi" name="kategori_instansi" placeholder="Masukkan Kategori Instansi...">
                    </div>
                    <div class="form-group">
                        <label for="instansi">Instansi</label>
                        <input type="text" id="instansi" name="instansi" placeholder="Masukkan Instansi...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password...">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="terms" name="terms">
                        <label for="terms">Setuju dengan Syarat dan Ketentuan Penggunaan Aplikasi dan Kebijakan Privasi</label>
                    </div>
                    <button type="submit" class="btn">Daftar</button>
                    <p>Sudah memiliki akun? Silakan <a href="<?= base_url('login'); ?>">masuk disini</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
