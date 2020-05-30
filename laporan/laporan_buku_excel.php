<?php
 
 $koneksi = new mysqli ("localhost" , "root", "" ,"db_perpustakaan");

 $filename = "buku_excel-(".date('d-m-Y').").xls";

 header("content-disposition: attachment; filename='$filename' ");

 header("content-type: appliction/vdn.ms.excel");

?>

<h2> Laporan Buku</h2>

<table border="1">
	
	<tr>
         <th>NO.</th>
         <th>JUDUL</th>
         <th>PENGARANG</th>
         <th>PENERBIT</th>
         <th>TAHUN TERBIT</th>
         <th>ISBN</th>
         <th>JUMLAH BUKU</th>
         <th>TGL-INPUT</th>                   
      </tr>

       <?php 
 
                    
          $sql = $koneksi -> query ("select * from tb_buku");

           while ($data = $sql ->fetch_assoc()) {
                            
                          
            $no++; 
         ?>

           <tr>
                  <td> <?php echo $no;?> </td>
                  <td> <?php echo $data ['judul']?> </td>
                  <td> <?php echo $data ['pengarang']?> </td>
                  <td> <?php echo $data ['penerbit']?> </td>
                   <td> <?php echo $data ['tahun_terbit']?> </td>
                  <td> <?php echo $data ['isbn']?> </td>
                  <td> <?php echo $data ['jumlah_buku']?> </td>
                   <td> <?php echo $data ['tgl_input']?> </td>

                </tr>

                <?php } ?>

</table>