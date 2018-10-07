<?php
	session_start();
    
    $conn = mysqli_connect($host, $user, $pass, $db) or die ("Connection Failed!");
    $mysqli = "SELECT * FROM t_ta5";
    $result = mysqli_query($conn,$mysqli);
    $view = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>TA 5 Woi!!!</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
        
        <h1><center>Lihat Data</center></h1>

        <table align="center">

                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?php echo "$view['nim']"; ?></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo "$view['name']"; ?></td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>:</td>
                    <td><?php echo "$view['email']"; ?></td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo "$view['tgl']"; ?>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo "$view['jeniskelamin']"; ?>
                    </td>
                </tr>

                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?php echo "$view['prodi']"; ?></td>
                </tr>

                <tr>
                    <td>Fakultas</td>
                    <td>:</td>
                    <td><?php echo "$view['fakultas']"; ?></td>
                </tr>

                <tr>
                    <td>Komentar</td>
                    <td>:</td>
                    <td><?php echo "$view['com']"; ?></td>
                </tr>
            </table>
        </form>  
</body>
</html>

<?php
    session_destroy();
?>