<?php
 include '../../koneksi.php';
 $judul = $_POST['judul'];
 $isi = $_POST['isi'];
 
 $update = mysqli_query($koneksi, "UPDATE tb_about SET judul = '$judul', isi = '$isi'");
 
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
 
