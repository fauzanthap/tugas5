<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
<?php
//$a menyimpan data 300.4
$a = 300.4;
echo $a;
echo "<br>";
//menampilkan value double
echo "Tipe Doube : ", doubleval($a), "<br>";
//menampilkan value integer
echo "Tipe Integer : ", intval($a), "<br>";
//menampilkan value string
echo "Tipe String : ", strval($a);
?>
</body>
</html>