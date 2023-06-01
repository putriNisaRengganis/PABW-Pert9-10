<?php
 //load koneksi database
 include '../../koneksi.php';
 
 //ambil data dari form
 $id = $_POST['id'];
 $nama_kategori_post = $_POST['nama_kategori_post'];
 //
 
 //proses upload gambar
 
 //
 //update data ke database
 $update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$nama_kategori_post' WHERE id = '$id'");
 
 
  if($update){
  //Putri Nisa Rengganis
  echo "<script>
  alert('Data Berhasil Diubah');
  window.location.href='index.php';
  </script>";
  }else{
  //jika gagal tampilkan pesan gagal edit data
  echo "<script>
  alert('Data Gagal Diubah');
  window.location.href='index.php';
  </script>";
  }
 
