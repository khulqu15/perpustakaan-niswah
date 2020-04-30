<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> <b> Judul </b> </label>
                  <input  class="form-control"  name="judul"/>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Pengarang </b> </label>
                  <input  class="form-control" name="pengarang"/>
                </div>

               <div class="form-group">
                  <label> <b> Penertbit </b> </label>
                  <input class="form-control" name="penerbit"/>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Tahun terbit </b> </label>
                  <select class=" form-control" name=" tahun"/>
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
                  <input  class="form-control" name="isbn"/>
                </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Jumlah Buku </b> </label>
                  <input class="form-control"type="number"name="jumlah"/>
                </div>
               
               <div class="form-group">
                  <label><b> Lokasi </b> </label>
                  <select class="form-control" name="lokasi">
                    <option value="rak1"> Rak 1</option>
                    <option value="rak2"> Rak 2</option>
                    <option value="rak3"> Rak 3</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Tanggal Input </b> </label>
                  <input class="form-control" name="tanggal" type="date"/>
                </div>
              

              <div class="box-footer">
                <button type="submit" name="submit"  class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

  <?php 

   if (isset($_POST['submit'])) {

    
    $judul = $_POST ['judul'];
    $pengarang = $_POST ['pengarang'];
    $penerbit = $_POST ['penerbit'];
    $tahun = $_POST ['tahun'];
    $isbn = $_POST ['isbn'];
    $jumlah = $_POST ['jumlah'];
    $lokasi = $_POST ['lokasi'];
    $tanggal = $_POST ['tanggal'];
 
   $sql = $koneksi-> query ("insert into tb_buku(judul,pengarang,penerbit,tahun_terbit,isbn,jumlah_buku,lokasi,tgl_input)values('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal')");


   if ($sql) {
     ?>
     <script type="text/javascript">
       
       alert (" Data Berhasil Di Simpan");
       window.location.href="?page=buku";
     </script>
     <?php 
   }
  }
  ?>

