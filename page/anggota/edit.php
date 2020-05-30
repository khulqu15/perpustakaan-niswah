<?php

    $nim= $_GET['id'];

    $sql = $koneksi-> query ("select * from tb_anggota where nim='$nim'");

    $data = $sql-> fetch_assoc();

    $jenis_kelamin = $data['jenis_kelamin'];

?>

<div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit Data Anggota </b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> <b> NIM </b> </label>
                  <input  class="form-control" value="<?php echo $data['nim']?>"  readonly name="nim"/>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1"> <b> NAMA </b> </label>
                  <input  class="form-control" value="<?php echo $data['nama']?>" name="nama"/>
                </div>

               <div class="form-group">
                  <label> <b> TEMPAT LAHIR</b> </label>
                  <input class="form-control"value="<?php echo $data['tempat_lahir']?>" name="tempat_lahir"/>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> TANGGAL LAHIR </b> </label>
                  <input class="form-control" value="<?php echo $data['tgl_lahir']?>" name="tgl_lahir" type="date"/>
                </div>  

               <div class="box-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"> <b> JENIS KELAMIN </b> </label>
                  <div class="col-sm-10">
                 <div class="form-check">
               <input type="radio" class="form-check-input" name="jenis_kelamin" value="l" <?php echo($jenis_kelamin==l)?"checked" :"";?> />
               <label class="form-check-label">LAKI-LAKI</label>
                </div>
               <div class="form-check">
              <input type="radio" class="form-check-input" name="jenis_kelamin" value="p" <?php echo($jenis_kelamin==p)?"checked" :"";?> />
                <label class="form-check-label">PEREMPUAN</label>
                </div>
                </div>


            <div class="box-body">
                <div class="form-group">
                  <label> <b> PROGRAM KEAHLIAN </b> </label>
                  <select class=" form-control" name=" keahlian"/>
                   <option value="ti"> Teknik Informasi </option>
                   <option value="si"> Sistem Informasi </option>
                   
                  </select>
                </div>


              <div class="box-footer">
                <button type="submit" name="submit"  class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

  <?php 

   if (isset($_POST['submit'])) {

    
    $nim = $_POST ['nim'];
    $nama = $_POST ['nama'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jenis_kelamin= $_POST ['jenis_kelamin'];
    $keahlian = $_POST ['keahlian '];

   $sql = $koneksi-> query ("update tb_anggota set nim='$nim' , nama='$nama' , tempat_lahir='$tempat_lahir' , tgl_lahir='$tgl_lahir' , jenis_kelamin='$jenis_kelamin' , keahlian='$keahlian' where nim='$nim' ");


   if ($sql) {
     ?>
     <script type="text/javascript">
       
       alert (" Data Berhasil Di Simpan");
       window.location.href="?page=anggota";
     </script>
     <?php 
   }
  }
  ?>

