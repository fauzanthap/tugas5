<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
//script untuk tugas nomor 2
if ($nama == "" and $email == ""){
    echo "Nama dan Email Tidak Boleh Kosong";;
} elseif($nama == ""){
    echo "Nama Tidak Boleh Kosong";
} elseif ($email == "") {
    echo "Email Tidak Boleh Kosong";
} 

//scriptuntuk tugas nomor 1 bagian menampilkan data login waktu dan tanggal
else {
    date_default_timezone_set('Asia/Jakarta');
echo 'Tanggal login: ' . date('d-m-Y H:i:s');
echo "<center>Nama :".$_POST['nama']."</center><br>";
echo "<center>Email :".$_POST['email']."</center><br>";
}
?>