<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // perintah hapus data berdasarkan id yang dikirimkan
  $q = mysqli_query($connection,"DELETE FROM kunjungan WHERE id = '$id'");

  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='buku_tamu.php'</script>";
  } else {
      // pesan apabila hapus gagal
      echo "<script>alert('Data gagal dihapus'); window.location.href='buku_tamu.php'</script>";
  }
}else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: buku_tamu.php');
}
