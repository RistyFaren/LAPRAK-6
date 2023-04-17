<?php
//mengambil data 
$nama = $_GET['nama'];
$tempatlahir = $_GET['tempatlahir'];
$tgllahir = $_GET['tanggallahir'];
$kelamin = $_GET['kelamin'];
$alamat = $_GET['alamat'];
$agama = $_GET['agama'];
$pendidikan = $_GET['pendidikan'];
$prodi = $_GET['prodi'];

//menampilkan data
echo "<h2>HASIL BIODATA</h2>";
echo "Nama = $nama"."<br>";
echo "Tempat & Tanggal Lahir = $tempatlahir, $tgllahir"."<br>";
echo "Jenis Kelamin = $kelamin"."<br>";
echo "Alamat = $alamat"."<br>";
echo "Agama = $agama"."<br>";
echo "Pendidikan = $pendidikan"."<br>";
echo "Prodi = $prodi"."<br>";
?>