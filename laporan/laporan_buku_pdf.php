<?php
$koneksi = new mysqli("localhost" , "root" ,"" , "db_perpustakaan");
$content='

<style type="text/css">
  .table{border-collapse: collapse;}
  .table th{padding: 8px 5px; background-color: #cccccc; }
   .table th{padding: 8px 5px; }

</style>

';

 $content .='

 <page>
  <h2> Laporan Data Buku</h2>
  <table border ="1" class="tabel">
     <tr>
    <th>No.</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>ISBN</th>
        <th>Jumlah Buku</th>
        <th>Tgl Input</th>    
  </tr> ';



        $sql = $koneksi -> query ("select * from tb_buku");

        while ($data = $sql ->fetch_assoc()) {
                                          
        $no++; 

        $content .='

           <tr>
                  <td> '.$no;.'</td>
                  <td> '. $data ['judul'].' </td>
                  <td> '. $data ['pengarang'].' </td>
                  <td> '.$data ['penerbit'].' </td>
                  <td> '. $data ['tahun_terbit'].' </td>
                  <td> '.$data ['isbn'].' </td>
                  <td> '. $data ['jumlah_buku'].'</td>
                  <td> '. $data ['tgl_input'].' </td>

                </tr>
        ';
      }
      $content .= '


  </table>
 </page>';

 require_once('../html2pdf/html2pdf.class.php');
 $html2pdf = new HTML2PDF ('P' , 'A4' , 'fr');
 $html2pdf->WriteHTML($content);
 $html2pdf->Output('exemple.pdf');



?>