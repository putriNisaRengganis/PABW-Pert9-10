<?php
 include '../../koneksi.php';

$id = $_POST ['id'];
$nama_sosmed = $_POST['nama_sosmed'];
$link = $_POST['link'];

$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = '../gambarSocial/';
$namaFile= uniqid().$nama_file;
move_uploaded_file($source, $folder.$namaFile);
 
 $update = mysqli_query($koneksi, "UPDATE tb_social SET nama_sosmed = '$nama_sosmed', link = '$link', ikon = 'namaFile' WHERE id = '$id'");
 
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
 
