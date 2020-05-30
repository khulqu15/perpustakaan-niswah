<section class="content">
<div class="row">
 <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b> Data Transaksi </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Tanggal Pinjaman</th>
                      <th>Tanggal Kembali</th>
                      <th> Terlambat </th>
                      <th>Status</th> 
                      <th>AKSI</th> 
                </tr>
                </thead>
                <tbody>

                   <?php 
 
                    
                        $sql = $koneksi -> query ("select * from tb_transaksi where status='pinjam' ");

                          while ($data = $sql ->fetch_assoc()) {

                        
                       $no++; 
                   ?>


                <tr>
                  <td> <?= $no;?> </td>
                  <td> <?= $data ['judul']?> </td>
                  <td> <?= $data ['nim']?> </td>
                  <td> <?= $data ['nama']?> </td>
                  <td> <?= $data ['tgl_pinjam']?> </td>
                  <td> <?= $data ['tgl_kembali']?> </td>
                  <td> 

                        <?php 
  
                        $denda =1000;

                        $tgl_dateline2= $data['tgl_kembali'];

                        $tgl_kembali = date('Y-m-d');

                        $lambat = terlambat($tgl_dateline2, $tgl_kembali);

                        $denda1 = $lambat*$denda;

                        if ($lambat>0) {
                           
                           echo"
                            
                            <font color= 'red'> $lambat hari <br> (Rp $denda1)</font>

                           ";
                        }else {
                           echo $lambat ."Hari";
                        }
 
                         ?> 

                  </td>
                  <td> <?= $data ['status']?> </td>
                  <td> 
  
                  <a href="?page=transaksi&aksi=kembali&id=<?=$data['id']; ?>&judul=<?=$data['judul'];?>" class="btn btn-info">Kembali</a>
                  <a  href="?page=transaksi&aksi=perpanjang&id=<?=$data['id'];?> &judul=<?= $data['judul']?>&lambat=<?= $lambat?>&tgl_kembali=<?= $data['tgl_kembali']?>"  class="btn btn-danger">Perpanjang</a>

                  </td>

                </tr>

                <?php } ?>

              </tbody>
                  
            </table>
              <a href="?page=transaksi&aksi=tambah"  class="btn btn-info" style="margin-top: 8px;" title=""> Tambah Data</a>

              <a href="./laporan/laporan_transaksi_excel.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To Excel</a>

               <a href="./laporan/laporan_transaksi_pdf.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To PDF</a>
          </div>
        </div>
      </div>
    </section>