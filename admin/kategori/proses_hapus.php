<?php
 //load koneksi database
 include '../../koneksi.php';
 //ambil id dari url
 $id = $_GET['id'];
 //hapus file gambar dari folder gambar
 $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id = '$id'");
 $data = mysqli_fetch_array($query);
 
 $hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id = '$id'");
 
 if($hapus){
 //Putri Nisa Rengganis 
 echo "<script>
 alert('Data Berhasil Dihapus');
 window.location.href='index.php';
 </script>";
 }else{
 //jika gagal tampilkan pesan gagal hapus data
 echo "<script>
 alert('Data Gagal Dihapus');
 window.location.href='index.php';
 </script>";
 }
