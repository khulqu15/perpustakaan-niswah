<section class="content">
<div class="row">
 <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b> Data Buku </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>No.</th>
                      <th>Judul</th>
                      <th>Pengarang</th>
                      <th>Penerbit</th>
                      <th>Tahun Terbit</th>
                      <th>ISBN</th>
                      <th>Jumlah Buku</th>
                      <th>Tgl Input</th> 
                      <th>Aksi</th> 
                </tr>
                </thead>
                <tbody>

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
                  <td> 
  
                  <a href="?page=buku&aksi=edit&id=<?=$data ['id'];?>" class="btn btn-info" title=""> <i class="fa fa-edit"></i> EDIT</a>
                  <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')"href="?page=buku&aksi=hapus&id=<?= $data ['id'];?>" class="btn btn-danger" title=""> <i class="fa fa-trash"></i>HAPUS</a>

                  </td>

                </tr>

                <?php } ?>

              </tbody>
                  
            </table>
              <a href="?page=buku&aksi=tambah"  class="btn btn-info" style="margin-top: 8px;" title=""> Tambah Data</a>

              <a href="./laporan/laporan_buku_excel.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To Excel</a>

               <a href="./laporan/laporan_buku_pdf.php" class="btn btn-default" style="margin-top: 1px"> <i class="fa fa-print"></i> Export To PDF</a>
          </div>
        </div>
      </div>
    </section>