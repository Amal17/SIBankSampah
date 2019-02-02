<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/dashboard.css')?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo(base_url('Home/logout')); ?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'dashboard');
                  
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard').'">'; 
                  }

                ?>
                
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>

              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'produk');
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard/produk').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard/produk').'">'; 
                  }

                ?>

                  <span data-feather="shopping-cart"></span>
                  Produk
                </a>
              </li>
              
              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'admin');
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard/admin').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard/admin').'">'; 
                  }

                ?>

                  <span data-feather="bar-chart-2"></span>
                  Admin
                </a>
              </li>

              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'anggota');
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard/anggota').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard/anggota').'">'; 
                  }

                ?>
                  <span data-feather="users"></span>
                  Anggota
                </a>
              </li>
              
              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'transaksi');
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard/transaksi').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard/transaksi').'">'; 
                  }

                ?>
                
                  <span data-feather="layers"></span>
                  Transaksi
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Laporan</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'bulanan');
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard/bulanan').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard/bulanan').'">'; 
                  }

                ?>
                  <span data-feather="file-text"></span>
                  Bulanan
                </a>
              </li>
              <li class="nav-item">
                <?php 

                  $hasil = strcmp($halaman, 'tahunan');
                  if (!$hasil){
                    echo '<a class="nav-link active" href="'.base_url('/dashboard/tahunan').'">';
                  }else{
                    echo '<a class="nav-link" href="'.base_url('/dashboard/tahunan').'">'; 
                  }

                ?>
                  <span data-feather="file-text"></span>
                  Tahunan
                </a>
              </li>
            </ul>
          </div>
        </nav>