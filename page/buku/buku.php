 <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b> Data Buku </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <a href="?page=buku&aksi=tambah"  class="btn btn-info" style="margin-bottom: 20px;" title=""> Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>NO.</th>
                      <th>JUDUL</th>
                      <th>PENGARANG</th>
                      <th>PENERBIT</th>
                      <th>TAHUN TERBIT</th>
                      <th>ISBN</th>
                      <th>JUMLAH BUKU</th>
                      <th>TGL-INPUT</th> 
                      <th>AKSI</th> 
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
  
                  <a href="?page=buku&aksi=edit&id= <?php echo $data ['judul'];?>" class="btn btn-info" title=""> <i class="fa fa-edit"></i> EDIT</a>
                  <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')"href="?page=buku&aksi=hapus&id= <?php echo $data ['judul'];?>" class="btn btn-danger" title=""> <i class="fa fa-trash"></i>HAPUS</a>

                  </td>

                </tr>

                <?php } ?>

              </tbody>

            </table>

          </div>
        </div>