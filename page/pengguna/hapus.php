<?php 
 $id= $_GET['id'];
 
$sql = $koneksi-> query ("DELETE FROM tb_user where id='$id' ");


   if ($sql) {
     ?>
     <script type="text/javascript">
       
       alert (" Data Berhasil Di hapus");
       window.location.href="?page=pengguna";
     </script>
     <?php 
   }


?>