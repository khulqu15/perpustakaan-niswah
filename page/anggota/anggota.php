<section class="content">
<div class="row">
 <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b> Data Anggota </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>NO.</th>
                      <th>Nama</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Program Studi</th> 
                      <th>AKSI</th> 
                </tr>
                </thead>
                <tbody>

                   <?php 
 
                    
                        $sql = $koneksi -> query ("select * from tb_anggota");

                          while ($data = $sql ->fetch_assoc()) {

                         $jenis_kelamin = ($data['jenis_kelamin']==l)? "Laki-Laki" : "Perempuan";

                          $keahlian = ($data['keahlian']==ti)? "Teknik Informasi" : "Sistem Informasi";
                            
                       $no++; 
                   ?>


                <tr>
                  <td> <?php echo $no;?> </td>
                  <td> <?php echo $data ['nama']?> </td>
                  <td> <?php echo $data ['tempat_lahir']?> </td>
                  <td> <?php echo $data ['tgl_lahir']?> </td>
                   <td> <?php echo $jenis_kelamin;?> </td>
                  <td> <?php echo $keahlian;?> </td>
                  <td> 
  
                  <a href="?page=anggota&aksi=edit&id=<?=$data ['nim'];?>" class="btn btn-info" title=""> <i class="fa fa-edit"></i> EDIT</a>
                  <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')"href="?page=anggota&aksi=hapus&id=<?= $data ['nim'];?>" class="btn btn-danger" title=""> <i class="fa fa-trash"></i>HAPUS</a>

                  </td>

                </tr>

                <?php } ?>

              </tbody>
                  
            </table>
              <a href="?page=anggota&aksi=tambah"  class="btn btn-info" style="margin-top: : 8px;" title=""> Tambah Data</a>

              <a href="./laporan/laporan_anggota_excel.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To Excel</a>

               <a href="./laporan/laporan_anggota_pdf.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To PDF</a>
          </div>
        </div>
      </div>
    </section>