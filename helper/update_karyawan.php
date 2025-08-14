<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$no_induk_karyawan = $_POST['no_induk_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_handphone = $_POST['no_handphone'];
$devisi = $_POST['devisi'];

//query 
$query_update = "UPDATE karyawan SET 
				nama_karyawan='$nama_karyawan',
				no_induk_karyawan='$no_induk_karyawan',
				jenis_kelamin='$jenis_kelamin',
				no_handphone='$no_handphone',
				devisi='$devisi'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
