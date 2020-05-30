 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <li class="text-center">
          <img src="3.png" class="user-image img-responsive" width="185px;">
        </li>
    
      
      <ul class="sidebar-menu">
       
        
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <?php  if ($_SESSION['admin']) { ?>
            <li><a href="?page=pengguna"><i class="fa fa-users"></i> Pengguna</a></li>
            <?php } ?>
            <li><a href="?page=anggota"><i class="fa fa-table"></i> Data Anggota</a></li>
            <li><a href="?page=buku"><i class="fa fa-book"></i> Data Buku </a></li>
            <li><a href="?page=transaksi"><i class="fa fa-inbox"></i> Transaksi</a></li>
                
       
      


      </ul>
    </section>
 
  </aside>

  