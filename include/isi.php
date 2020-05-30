<?php


  $page = $_GET['page'];
  $aksi = $_GET['aksi'];

  if ($page=="buku")
  {
    if ($aksi == "") 
    {
      include"page/buku/buku.php";
    }
    elseif ($aksi=="tambah") {
      include"page/buku/tambah.php";
    }
    elseif ($aksi=="edit") {
      include"page/buku/edit.php";
    }
    elseif ($aksi=="hapus") {
     include "page/buku/hapus.php";
    }
  }

else if ($page == "pengguna") {
       if ($aksi == "") {
       include"page/pengguna/pengguna.php";
    } 
    elseif ($aksi=="tambah") {
      include"page/pengguna/tambah.php";
    }
    elseif ($aksi=="edit") {
      include"page/pengguna/edit.php";
    }
    elseif ($aksi=="hapus") {
     include "page/pengguna/hapus.php";
    }
}
  
  else if ($page == "anggota") {
       if ($aksi == "") {
       include"page/anggota/anggota.php";
    } 
    elseif ($aksi=="tambah") {
      include"page/anggota/tambah.php";
    }
    elseif ($aksi=="edit") {
      include"page/anggota/edit.php";
    }
    elseif ($aksi=="hapus") {
     include "page/anggota/hapus.php";
    }


  } else if ($page == "transaksi") {
       if ($aksi == "") {
       include"page/transaksi/transaksi.php";
   } elseif ($aksi=="tambah") {
      include"page/transaksi/tambah.php";
    }
    elseif ($aksi=="kembali") {
      include"page/transaksi/kembali.php";
    }
    elseif ($aksi=="perpanjang") {
     include "page/transaksi/perpanjang.php";
    }
  }
  else {
    include"home.php";
  }
?>