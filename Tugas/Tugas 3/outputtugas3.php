<h1><center> BIODATA </center></h1>
<?php
//Pendeklarasian variabel
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$gender = $_POST['gender'];
$address = $_POST['address'];

//pengambilan data untuk mengisi tampilan pada biodata
if ($NPM == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Nama == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Jurusan == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($gender == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($address == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";

//untuk menampilkan isi data tersebut
} else {
	echo "Npm : $NPM<br>" ;
	echo "Nama : $Nama<br>";
	echo "Jurusan : $Jurusan<br>";
	echo "Jenis Kelamin : $gender<br>";
	echo "Alamat : $address<br>";
}
?>