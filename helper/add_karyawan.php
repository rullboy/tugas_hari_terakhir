<?php
include 'koneksi.php';
//mengambil nilai post

$nama_karyawan = $_POST['nama_karyawan'];
$no_induk_karyawan = $_POST['no_induk_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_handphone = $_POST['no_handphone'];
$devisi = $_POST['devisi'];

//query
$query_simpan = "INSERT INTO karyawan (nama_karyawan, no_induk_karyawan, jenis_kelamin, no_handphone, devisi) 
				values ('$nama_karyawan', '$no_induk_karyawan', '$jenis_kelamin', '$no_handphone', '$devisi') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
