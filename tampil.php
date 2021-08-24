
<?php

// menangkap data nama dengan method get

$nama = $_GET['nama'];

// menangkap data usia dengan method get
$jeniskelamin = $_GET['jeniskelamin'];
$agama = $_GET['agama'];
$alamat = $_GET['alamat'];
$tempatlahir = $_GET['tempatlahir'];
$tgllahir = $_GET['tgllahir'];
$citacita = $_GET['citacita'];
$usia = $_GET['usia'];
$asalsekolah = $_GET['asalsekolah'];
$hobi = $_GET['hobi'];

 

// menampilkan data nama

echo "Nama  :  " . $nama;

echo "<br/>";

// menampilkan data usia
echo " Jenis Kelamin : ". $jeniskelamin;
echo "<br> Agama  : ". $agama;
echo "<br> Tempat Lahir : ". $tempatlahir;
echo "<br> tanggal lahir  : ". $tgllahir;
echo "<br> cita cita  : ". $citacita;
echo "<br> Usia : " . $usia;
echo "<br> Asal Sekolah : ". $asalsekolah;
echo "<br> Hobi : ". $hobi;

?>