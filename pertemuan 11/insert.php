<?php
// include database connection file
include_once("koneksi.php");
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$ttl = $_POST['ttl'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$tgl_kunjungan = $_POST['tgl_kunjungan'];


		
		
				
		// Insert user data into table
		$result = mysqli_query($connection, "INSERT INTO kunjungan (id,nama,ttl,alamat,no_hp,tgl_kunjungan) VALUES('','$nama','$ttl','$alamat','$no_hp','$tgl_kunjungan')");
		
        if ($result) {
            // pesan jika data tersimpan
            echo "<script>alert('Data Kunjungan berhasil ditambahkan'); window.location.href='buku_tamu.php'</script>";
          } else {
            // pesan jika data gagal disimpan
            echo "<script>alert('Data Kunjungan gagal ditambahkan'); window.location.href='buku_tamu.php'</script>";
          }
        } else {
            // jika coba akses langsung halaman ini akan diredirect ke halaman index
            header('Location: buku_tamu.php');
	}
	?>