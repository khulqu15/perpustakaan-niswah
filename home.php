<?php 

 $sql = $koneksi->query("select * from tb_user");

$pengguna = $sql->num_rows;

  $sql2 = $koneksi->query("select * from tb_anggota");

 $anggota = $sql2->num_rows;

   $sql23 = $koneksi->query("select * from tb_buku");

   $buku = $sql23->num_rows;

   $sql24  = $koneksi->query("select * from tb_transaksi");

  $transaksi = $sql24->num_rows;
 

 ?>



<section class="content-header">
      <h3>
      <i class="fa fa-home"></i><b> HOME</b></B></h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      
      </ol>
    </section>

    <hr> 

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row ">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $pengguna; ?></h3>

              <p><b> Data Pengguna</b></p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-bag text-white"></i>
            </div>
            <a href="?page=pengguna" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-olive">
            <div class="inner">
              <h3><?php echo $anggota; ?><sup style="font-size: 20px"></sup></h3>

              <p><b>Data Anggota</b></p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-bar text-white"></i>
            </div>
            <a href="?page=anggota" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $buku; ?></h3>

              <p><b>Data Buku</b></p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-area text-white"></i>
            </div>
            <a href="?page=buku" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $transaksi; ?></h3>

              <p><b>Transaksi</b></p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie text-white"></i>
            </div>
            <a href="?page=transaksi" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>