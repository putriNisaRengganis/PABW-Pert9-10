<?php
include '../../koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$update = mysqli_query($koneksi, "UPDATE tb_twitter SET judul = '$judul', isi = '$isi'");

//Putri Nisa Rengganis
if($update){

echo "<script>
alert('Data Berhasil Diubah');
window.location.href='index.php';
</script>";
}else{
echo "<script>
alert('Data Gagal Diubah');
window.location.href='index.php';
</script>";
}

?>