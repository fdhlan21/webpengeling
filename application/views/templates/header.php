<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            background-image: url('assets/img/icon/bglogin.png'); /* Ganti dengan path gambar Anda */
        }

     

        .bg-gradient {
            background-color: #ffffff;
        }


        .custom-table-header {
            background-color: #60C0D0;
            color: #ffffff;
        }


        .slider {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .slider img {
            width: 70%;
            max-width: 550px;
           
        }

        .menu {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px 0;
        }

        .menu-item {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 120px;
            height:120px;
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-10px);
        }

        .menu-item img {
            width: 66px;
            height: 66px;
            
        }

        .menu-item p {
            margin-bottom: 10px;
            font-size: 10px;
            color: #0072B4;
            font-weight:600;
        }

        @media (max-width: 768px) {
            .slider img {
                width: 100%;
                max-width: 400px;
            }

            .menu {
                justify-content: center;
            }

            .menu-item {
                width: 139px;
            }

            .menu-item p {
                font-size: 12px;
                top:50px;
                font-weight:600;
                color:'#0072B4';
            }

            .img-home {
                height:70px;
            }
        }

        @media (max-width: 480px) {
            .slider img {
                width: 100%;
                max-width: 300px;
            }

            #brandText {
                display: flex;
                align-items: center; /* Align logo and text vertically */
            }

            .menu {
                padding:20px;
                display: grid;
                grid-template-columns: 2fr 1fr;
                gap: 20px;
                justify-content: center;
          
               
            }

            .menu-item {
                width: 139px;
      
               
              
            }

            .menu-item p {
                font-size: 12px;
                top:50px;
                font-weight:600;
                color:'#0072B4';
                
            }

            .img-home {
                height:70px;
            }
        }

        @media print {
            @page {
                size: A5;
                margin: 0;
            }

            body {
                margin: 0;
            }
        }

        /* Styling untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
            text-align: left;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
            vertical-align: top;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }

        table td {
            text-align: center;
        }

        table td, table th {
            white-space: nowrap;
        }

        table thead th {
            background-color: #0072B4;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-container {
            overflow-x: auto;
        }

        .form-group label {
            font-weight: 600;
            color: #0072B4;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            background-color: #0072B4;
            border-color: #0072B4;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #005f9e;
            border-color: #005f9e;
        }

        .form-group label {
            font-weight: 600;
            color: #0072B4;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            background-color: #0072B4;
            border-color: #0072B4;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #005f9e;
            border-color: #005f9e;
        }

        .btn-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border-radius: 50%;
            padding: 15px 20px;
            font-size: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .table-container {
            overflow-x: auto;
        }

        .table th, .table td {
            white-space: nowrap;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 1rem;
        }

        .breadcrumb-item a {
            text-decoration: none;
            color: #0072B4;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        .card-header h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            color: #0072B4;
            margin: 0;
        }

        .subjudulbalita {
            font-size:12px
        }

        @media (max-width: 480px) {
            .btn-floating {
                padding: 10px 15px;
                font-size: 12px;
            }

            .btn-primary {
                padding: 5px 15px;
                font-size: 14px;
            }

        }

        .table-container {
            overflow-x: auto;
        }
    
        .table th, .table td {
            white-space: nowrap;
            text-align: center;
        }
    
        .btn-primary {
            background-color: #0072B4;
            border-color: #0072B4;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
        }
    
        .btn-primary:hover {
            background-color: #005f9e;
            border-color: #005f9e;
        }
    
        @media (max-width: 480px) {
            .btn-primary {
                padding: 5px 15px;
                font-size: 14px;
            }
        }

        .form-group {
            margin-bottom: 20px;
        }
        
        .form-check {
            margin-bottom: 10px;
        }
        
        h5 {
            margin-top: 50px;
            margin-bottom: 10px;
        }
        
        .nav-link.active {
            background-color: #0072B4;
            color: white !important;
            border-color: #0072B4;
        }

        .nav-link.active, .nav-link:hover {
            background-color: #0072B4;
            color: white !important;
            border-color: #0072B4;
        }
        
        
    </style>
</head>

<body id="page-top" class="bg-gradient">
<!-- Page Wrapper -->
<div id="wrapper" class="">
