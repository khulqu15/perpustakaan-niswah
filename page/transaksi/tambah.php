<?php 

$tgl_pinjam = date("d-m-Y");

$tujuh_hari = mktime(0,0,0, date("n"), date('j')+7, date("Y"));

$kembali = date("d-m-Y" , $tujuh_hari);


 ?>


<div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Tambah Data Transaksi </b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form method="POST">
             
                <div class="box-body">
                <div class="form-group">
                  <label> <b> Judul </b> </label>
                  <select class=" form-control" name="buku">
                   <?php  
                      $sql = $koneksi->query ("select * from tb_buku order by id");

                      while ($data=$sql->fetch_assoc()) {
                        echo "<option value='$data[id].$data[judul]'>$data[judul]</option>";
                      }
                   ?>
                </select>
              </div>

               <div class="box-body">
               <div class="form-group">
                  <label> <b> Nama</b> </label>
                  <select class=" form-control" name=" nama"/>
                   <?php  
                      $sql = $koneksi->query ("select * from tb_anggota order by nim");

                      while ($data=$sql->fetch_assoc()) {
                        echo "<option value='$data[nim]. $data[nama]'>$data[nim].$data[nama]</option>";
                      }
                   ?>
                </select>
              </div>
               
              <div>
              <label for="exampleInputPassword1"> <b> Tanggal Pinjam </b> </label>
                  <input class="form-control" name="tgl_pinjam" type="text" id="tgl" value="<?php echo $tgl_pinjam; ?>" readonly />
              </div>
              
              <div>
              <label for="exampleInputPassword1"> <b> Tanggal Kembali </b> </label>
                  <input class="form-control" name="tgl_kembali" type="text" id="tgl" value="<?php echo $kembali; ?>" readonly/>
              </div>










              <div class="box-footer">
                <button type="submit" name="submit"  class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

  <?php 

   if (isset($_POST['submit'])) {

    $tgl_pinjam = $_POST ['tgl_pinjam'];
    $tgl_kembali = $_POST ['tgl_kembali'];

    $buku =  $_POST['buku'];
    $pecah_buku = explode(".", $buku);
    $id = $pecah_buku[0];
    $judul = $pecah_buku[1];


    $nama =  $_POST['nama'];
    $pecah_nama = explode(".", $buku);
    $nim = $pecah_nama[0];
    $nama = $pecah_nama[1];

    $sql = $koneksi->query("select * from tb_buku where id='$id'");
    while ($data = $sql-> fetch_assoc()) {
    	$sisa = $data['jumlah_buku'];

    	if ($sisa== 0) {
    		?>
            
            <script type="text/javascript">
            alert("Stok Buku Habis, Transaksi Tidak Dapat Dilakukan, Silahkan Tambah Stok Terlebih Dahulu");
            window.location.href="?page=transaksi&aksi=tambah";
            </script>
    		<?php
    	}else {
    		$sql = $koneksi->query("insert into tb_transaksi(judul ,nim ,nama ,tgl_pinjam ,tgl_kembali ,status ) values ('$judul' ,'$nim' ,'$nama' ,'$tgl_pinjam' ,'$tgl_kembali' ,'pinjam')");

    		$sql2 = $koneksi->query(" update tb_buku set jumlah_buku = (jumlah_buku - 1) where id='$id'");

    		?>
            
            <script type="text/javascript">
            alert("Simpan Data Berhasil");
            window.location.href="?page=transaksi";
            </script>
    		<?php
    	}
    }
  }
  ?>

