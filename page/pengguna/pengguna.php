<section class="content">
<div class="row">
 <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b> Data Pengguna </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>NO.</th>
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Foto</th> 
                      <th>AKSI</th> 
                </tr>
                </thead>
                <tbody>

                   <?php 
 
                    
                        $sql = $koneksi -> query ("select * from tb_user");

                          while ($data = $sql ->fetch_assoc()) {

                         $jenis_kelamin = ($data['jenis_kelamin'] == "1" )? "Laki-Laki" : "Perempuan";
                            
                       $no++; 
                   ?>


                <tr>
                  <td> <?php echo $no;?> </td>
                  <td> <?php echo $data ['username']?> </td>
                  <td> <?php echo $data ['nama']?> </td>
                  <td> <?php echo $data ['password']?> </td>
                  <td> <?php echo $data ['level']?> </td>
                  <td> <img src="images/<?php echo $data ['foto']?>" width="75" height="75" alt=""> </td>
                  <td> 
  
                  <a href="?page=pengguna&aksi=edit&id=<?=$data ['id'];?>" class="btn btn-info" title=""> <i class="fa fa-edit"></i> EDIT</a>
                  <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')"href="?page=pengguna&aksi=hapus&id=<?= $data ['id'];?>" class="btn btn-danger" title=""> <i class="fa fa-trash"></i>HAPUS</a>

                  </td>

                </tr>

                <?php } ?>

              </tbody>
                  
            </table>
              <a href="?page=pengguna&aksi=tambah"  class="btn btn-info" style="margin-top: 8px;" title=""> Tambah Data</a>

              <a href="./laporan/laporan_pengguna_excel.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To Excel</a>

               <a href="./laporan/laporan_pengguna_pdf.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To PDF</a>
          </div>
        </div>
      </div>
    </section>