<?php
if(isset($_POST['Input'])){
	$nama = $_POST['nama'];
	echo "Nama Anda  	: <b>$nama</b><br>";
	$kelas = $_POST['kelas'];
	echo "Kelas Anda 	: <b>$kelas</b><br>";
	$nim = $_POST['nim'];
	echo "NIM Anda   	: <b>$nim</b><br>";
	$agama = $_POST['agama'];
	echo "Agama Anda 	: <b>$agama</b><br>";
	$gender = $_POST['gender'];
	echo "Jenis kelamin : <b>$gender</b><br>";
	$alamat = $_POST['alamat'];
	echo "Alamat		: <b>$alamat</b><br>";
	$rt = $_POST['rt'];
	echo "RT			: <b>$rt</b><br>";
	$rw = $_POST['rw'];
	echo "RW			: <b>$rw</b><br>";
	$kecamatan = $_POST['kecamatan'];
	echo "Kecamatan		: <b>$kecamatan</b><br>";
	$kabupaten = $_POST['kabupaten'];
	echo "Kabupaten		: <b>$kabupaten</b><br>";
	$provinsi = $_POST['provinsi'];
	echo "Provinsi		: <b>$provinsi</b><br>";
}
?>