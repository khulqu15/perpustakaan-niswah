<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pengguna </h3>
            </div>
            
           <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> <b> Username </b> </label>
                  <input  type="text" class="form-control"  name="username"/>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Nama </b> </label>
                  <input  type="text"   class="form-control" name="nama"/>
                </div>

               <div class="form-group">
                  <label> <b> Password </b> </label>
                  <input   type="password"  class="form-control" name="password"/>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Level </b> </label>
                  <input  type="text"   class="form-control" name="level"/>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1"> <b> Foto </b> </label>
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
  
    $upload = move_uploaded_file($lokasi,"images/".$foto);

    if ($upload) {
      	
    $sql = $koneksi->query("INSERT INTO tb_user(username,nama,password,level,foto ) VALUES ('$username','$nama','$password','$level','$foto')");


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

  ?>

