<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$no_telepon = $_POST['no_telepon'];

	// buat query
  $query = pg_query("INSERT INTO customer (nama, jabatan, email, no_handphone, password) VALUEs ('$nama', '$jabatan', '$email', '$no_telepon', '$password')") ;

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: login-page.html?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: login-page.html?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
