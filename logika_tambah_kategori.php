<?php
include 'koneksi.php';
$kategori_id = $_POST['kategori_id'];
$nama_kategori = $_POST['nama_kategori'];
$deskripsi = $_POST['deskripsi'];

$input = mysqli_query($koneksi, "INSERT INTO kategori (kategori_id, nama_kategori, deskripsi) 
VALUES('$kategori_id', '$nama_kategori', '$deskripsi')") or die(mysqli_error($koneksi));

if($input){
    echo "<script>
            alert('Data Berhasil Disimpan');
            window.location.href = 'kategori.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal Menyimpan Data');
            window.location.href = 'kategori.php';
          </script>";
}
?>
