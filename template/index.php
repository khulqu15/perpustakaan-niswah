
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Perpustakaan</title>
  </head>
  <body>
   
   <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand text-white" href="#"> <i class="fas fa-book-reader" style="margin-left: 20px;"></i> <b>PERPUSTAKAAN </b></a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" >Search</button>
    </form>
    <div class="icon ml-4">
      <h5>
       
        <a class="text-white" href="logout.php" style="font-size: 17px;">  <i class="fas fa-sign-out-alt"></i> Log Out</a> 
      </h5>
    </div>
  </div>
</nav>



<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <li class="dropdown user user-menu">
              <img src="2.png" class="user-image" alt="User Image" style="width: 220px; margin-left:8px; ">
    <ul class="nav flex-column ml-3 mb-5"> <br>
  <li class="nav-item">
    <a class="nav-link active text-white"  href="index.php" style="font-size: 14px;"> <i class="fas fa-home mr-2 "></i>Home</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white"  href="?page/pengguna/pengguna.php" style="font-size: 14px;"> <i class="fas fa-user-cog mr-2"></i>Data Pengguna</a> <hr class="bg-secondary"> 
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="?page/anggota/anggota.php" style="font-size: 14px;"> <i class="fas fa-users mr-2 " ></i> Data Anggota</a> <hr class="bg-secondary"> 
  </li>
  <li class="nav-item">
    <a class="nav-link text-white "href="?page/buku/buku.php" style="font-size: 14px;"> <i class="fas fa-swatchbook mr-2 "></i>  Data Buku</a> <hr class="bg-secondary"> 
  </li> 
  <li class="nav-item">
    <a class="nav-link text-white" href="?page/transaksi/transaksi.php" style="font-size: 14px;"> <i class="fas fa-inbox mr-2 "></i> Transaksi</a> <hr class="bg-secondary">
  </li>
</ul>
  </div>
  <div class="col-md-10 p-5 pt-2 ">
    <h3>
     <i class="fas fa-home mr-2"></i></i><b>HOME</b></h3><hr>
      <div class="row text-white">


    <div class="card bg-info ml-4 mt-4" style="width: 17rem;">
  <div class="card-body">
    <div class="card-body-icon">
      <i class="fas fa-user-cog mr-2  "></i>
    </div>
    <h5 class="card-title text-white">Data Pengguna</h5>
    <div class="display-4">3</div>
    <a href="?page=pengguna"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
  </div>
</div>

    <div class="card bg-success ml-3 mt-4" style="width: 17rem;">
  <div class="card-body">
    <div class="card-body-icon">
      <i class="fas fa-users mr-2"></i>
    </div>
    <h5 class="card-title text-white">Data Anggota</h5>
    <div class="display-4 ">3</div>
    <a href="?page=anggota"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
  </div>
</div>

   <div class="card bg-warning ml-3 mt-4" style="width: 17rem;">
  <div class="card-body">
    <div class="card-body-icon">
      <i class="fas fa-swatchbook mr-2"></i>
    </div>
    <h5 class="card-title text-white">Data Buku</h5>
    <div class="display-4 ">3</div>
    <a href="?page=buku"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
  </div>
</div>

   
   <div class="card bg-danger ml-3 mt-4" style="width: 17rem;">
  <div class="card-body">
    <div class="card-body-icon">
     <i class="fas fa-inbox mr-2"></i>
    </div>
    <h5 class="card-title text-white">Transaksi</h5>
    <div class="display-4 ">6</div>
    <a href="?page=transaksi"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
  </div>
  </div>
 </div>

  


 </div>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
