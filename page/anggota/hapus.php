<?php 
 $nim= $_GET['id'];
 
$sql = $koneksi-> query ("DELETE FROM tb_anggota where nim='$nim' ");


   if ($sql) {
     ?>
     <script type="text/javascript">
       
       alert (" Data Berhasil Di hapus");
       window.location.href="?page=anggota";
     </script>
     <?php 
   }


?>