<?php
include '../../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_social WHERE id = '$id'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar'];
unlink('../gambarSocial/'.$nama_file);

$hapus = mysqli_query($koneksi, "DELETE FROM tb_social WHERE id ='$id'");

if($hapus){
//Putri Nisa Rengganis 

//jika berhasil tampilkan pesan berhasil hapus data
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
?>