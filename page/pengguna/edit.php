<?php

    $id= $_GET['id'];

    $sql = $koneksi-> query ("select * from tb_user where id='$id'");

    $data = $sql-> fetch_assoc();

   

?>

<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pengguna </h3>
            </div>
            
           <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> <b> Username </b> </label>
                  <input  type="text" class="form-control" value="<?php echo $data['username']?>"   name="username"/>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Nama </b> </label>
                  <input  type="text"   class="form-control" value="<?php echo $data['nama']?>"  name="nama"/>
                </div>

                  <div class="form-group">
                  <label> <b> Password </b> </label>
                  <input   type="password"  class="form-control"   value="<?php echo $data['password']?>" readonly name="password"/>
                </div>


                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Level </b> </label>
                  <input  type="text"   class="form-control" value="<?php echo $data['level']?>" name="level"/>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Foto </b> </label>
                   <label for="exampleInputPassword1"> <b> Foto </b> </label>
                   <label> <img src=" images/<?php echo $data['foto']?>" widht="100" height="100" alt=""></label>
                 
                </div>


                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Ganti Foto </b> </label>
                  <input  type="file"  name="foto"/>
                </div>

               

              <div class="box-footer">
                <button type="submit" name="submit"  class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

  <?php 

   if (isset($_POST['submit'])) {
    $username = $_POST ['username'];
    $nama = $_POST ['nama'];
    $password = $_POST ['password'];
    $level = $_POST ['level'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    if($foto !== "") {
      if (!empty($lokasi)) {
        move_uploaded_file($lokasi,"images/".$foto);
        $sql = $koneksi-> query ("update tb_user set username='$username',nama='$nama',password='$password',level='$level',foto='$foto' where id='$id' ");
        if ($sql) {
          ?>
          <script type="text/javascript">
            
            alert (" Data Berhasil Di Simpan");
            window.location.href="?page=pengguna";
          </script>
          <?php 
        }
     
      } else {
        $sql = $koneksi-> query ("update tb_user set (username='$username',nama='$nama',password='$password',level='$level' where id='$id' ");
        if ($sql) {
          ?>
          <script type="text/javascript">
            
            alert (" Data Berhasil Di Simpan");
            window.location.href="?page=pengguna";
          </script>
          <?php 
        }
      }
    } else {
      if (!empty($lokasi)) {
        move_uploaded_file($lokasi,"images/".$foto);
        $sql = $koneksi-> query ("UPDATE tb_user SET username='$username',nama='$nama',password='$password',level='$level',foto=foto where id='$id' ");
        if ($sql) {
          ?>
          <script type="text/javascript">
            
            alert (" Data Berhasil Di Simpan");
            window.location.href="?page=pengguna";
          </script>
          <?php 
        }
     
      } else {
        $sql = $koneksi-> query ("UPDATE tb_user set username='$username',nama='$nama',password='$password',level='$level', foto=foto where id='$id' ");
        if ($sql) {
          ?>
          <script type="text/javascript">
            
            alert (" Data Berhasil Di Simpan");
            window.location.href="?page=pengguna";
          </script>
          <?php 
        }
      }
    }
 }  

  ?>

