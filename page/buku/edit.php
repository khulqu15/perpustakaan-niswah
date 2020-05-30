<?php

    $id= $_GET['id'];

    $sql = $koneksi-> query ("select * from tb_buku where id='$id'");

    $data = $sql-> fetch_assoc();

?>


<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>EDIT DATA</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> <b> Judul </b> </label>
                  <input  class="form-control" value="<?php echo $data['judul']?>"  name="judul"/>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Pengarang </b> </label>
                  <input  class="form-control" value="<?php echo $data['pengarang']; ?>" name="pengarang"/>
                </div>

               <div class="form-group">
                  <label> <b> Penertbit </b> </label>
                  <input class="form-control" value="<?php echo $data['penerbit'] ?>" name="penerbit"/>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Tahun terbit </b> </label>
                  <select class=" form-control" value="<?php echo $data['tahun_terbit'] ?>" name=" tahun"/>
                  <?php 
                       
                       $tahun = date("Y");

                       for ($i=$tahun-29; $i <= $tahun; $i++) { 
                         echo'

                         <option value="'.$i.'">' .$i. ' </option>

                         ';
                       }
                  ?>
                  </select>
                </div>  
                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Isbn </b> </label>
                  <input  class="form-control" value="<?php echo $data['isbn'] ?>" name="isbn"/>
                </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Jumlah Buku </b> </label>
                  <input class="form-control"type="number" value="<?php echo $data['jumlah_buku']?>" name="jumlah"/>
                </div>
               
               <div class="form-group">
                  <label><b> Lokasi </b> </label>
                  <select class="form-control" name="lokasi">
                    <option value="rak1" <?php if($lokasi== 'rak1') {echo "selected";} ?>> Rak 1</option>
                    <option value="rak2" <?php if($lokasi== 'rak2') {echo "selected";} ?>> Rak 2</option>
                    <option value="rak3" <?php if($lokasi== 'rak3') {echo "selected";} ?>> Rak 3</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Tanggal Input </b> </label>
                  <input class="form-control" value="<?php echo $data['tgl_input'] ?>" name="tanggal" type="date"/>
                </div>
              

              <div class="box-footer">
                <button type="submit" name="submit"  class="btn btn-primary"> <b>SIMPAN </b></button>
              </div>
            </form>
          </div>

  <?php 

   if (isset($_POST['submit'])) {

    
    $judul= $_POST['judul'];
    $pengarang = $_POST ['pengarang'];
    $penerbit = $_POST ['penerbit'];
    $tahun = $_POST ['tahun'];
    $isbn = $_POST ['isbn'];
    $jumlah = $_POST ['jumlah'];
    $lokasi = $_POST ['lokasi'];
    $tanggal = $_POST ['tanggal'];
 
   $sql = $koneksi-> query ("update tb_buku set judul='$judul' , pengarang= '$pengarang' ,penerbit='$penerbit' , tahun_terbit='$tahun' , isbn='$isbn' , jumlah_buku='$jumlah' , lokasi='$lokasi' , tgl_input='$tanggal' where id='$id' ");


   if ($sql) {
     ?>
     <script type="text/javascript">
       
       alert (" Data Berhasil Di Ubah");
       window.location.href="?page=buku";
     </script>
     <?php 
   }
  }
  ?>

