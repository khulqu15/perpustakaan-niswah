<?php


  $page = $_GET['page'];
  $aksi = $_GET['aksi'];

  if ($page=="buku")
  {
    if ($aksi == "") 
    {
  		include"page/buku/buku.php";
    } 
    else if ($page="tambah") 
    {
      include"page/buku/tambah.php";  
    } 
    else if ($page="edit") 
    {
      include"page/buku/edit.php";
    } 
    else if ($page="hapus") 
    {
      include"page/buku/hapus.php";  
    } 
  }
  else if ($page == "anggota") {
  	   if ($aksi == "") {
  	   include"page/anggota/anggota.php";
  	}
  } else if ($page == "transaksi") {
  	   if ($aksi == "") {
  	   include"page/transaksi/transaksi.php";
  	}
  }
  else {
    include"page/buku/hapus.php";
  }
?>