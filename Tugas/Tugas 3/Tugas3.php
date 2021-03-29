<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
<table border="0">
    <form action="outputtugas3.php" method="POST">
        <tr>
            <td>NPM</td>
            <td> : </td>
            <td><input type="text" name="NPM"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td> : </td>
            <td><input type="text" name="Jurusan"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><input type=radio name=gender value="Laki-Laki">Laki-Laki
                <input type=radio name=gender value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat rumah </td>
            <td> : </td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="kirim"></td>
        </tr>
    </form>
</table>
</body>
</html>