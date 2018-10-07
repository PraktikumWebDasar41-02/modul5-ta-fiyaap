<?php

	session_start();

	$host ="localhost"; //host server
	$user ="root"; //user login phpMyAdmin
	$pass =""; //pass login phpMyAdmin
	$db ="d_ta5"; //nama database
	$conn = mysqli_connect($host, $user, $pass, $db) or die ("Connection Failed!");
?>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
	<title>TA 5 Woi!!!</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
			
	    <h1><center>FORM DATA</center></h1>

	        <table align="center">
	            <tr>
	                <td>NIM</td>
	                <td>:</td>
	                <td><input type="text" name="nim" placeholder="NIM"></td>
	            </tr>

	            <tr>
	                <td>Nama</td>
	                <td>:</td>
	                <td><input type="text" name="name" placeholder="Name"></td>
	            </tr>

	            <tr>
	                <td>E-mail</td>
	                <td>:</td>
	                <td><input type="text" name="email" placeholder="E-mail"></td>
	            </tr>

				<tr>
	                <td>Tanggal Lahir</td>
	                <td>:</td>
	                <td><input type="date" name="tgl"></td>
	            </tr>

	            <tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
						<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
					</td>
				</tr>

				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>
						<select name="prodi">
							<option value="D3MI">D3 MANAJEMEN INFORMATIKA</option>
							<option value="D3MP">D3 MANAJEMEN PEMASARAN</option>
							<option value="D3IF">D3 TEKNIK INFORMATIKA</option>
							<option value="D3TT">D3 TEKNIK TELEKOMUNIKASI</option>
							<option value="D3PH">D3 PERHOTELAN</option>
							<option value="D4SM">D4 SISTEM MULTIMEDIA</option>
							<option value="S1MBTI">S1 MBTI</option>
							<option value="S1IKOM">S1 ILMU KOMUNIKASI</option>
							<option value="S1ADBIS">S1 ADMINISTRASI</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td>
						<select name="fakultas">
							<option value="FIT">FIT</option>
							<option value="FIK">FIK</option>
							<option value="FEB">FEB</option>
							<option value="FKB">FKB</option>
							<option value="FRI">FRI</option>
							<option value="FTE">FTE</option>
						</select>
					</td>
				</tr>

				<tr>
                	<td>Komentar</td>
                	<td>:</td>
                	<td><input type="textarea" name="com" value=""></td>
            	</tr>
	        </table>
	        <center>
	        	<input type="submit" name="submit" value="submit">
	        </center>
	</form>
</body>
</html>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<?php

if(isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$name = $_POST['name'];
        $email = $_POST['email'];
        $tgl = $_POST['tgl'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $com = $_POST['com'];

        $booleans = true;
       
       	if (empty($nim)) {
       		echo "NIM Tidak Boleh Kosong!!!";
       	}else{
       		if (strlen($nim)!=10 && $_POST['nim']!="" && is_numeric($_POST['nim'])) {
       			echo "NIM Harus 10 Digit!!!<br>";
       		}
       	}

       	if (empty($name)) {
       		echo "Nama Tidak Boleh Kosong!!!";
       	}else{
       		if (strlen($name)>=20) {
       			echo "Nama Maksimal 20 Karakter!!!<br>";
       		}
       	}

       	if (empty($email)) {
       		echo "E-mail Tidak Boleh Kosong!!!";
       	}else{
       		if (!strpos($email, '@') || !strpos($email, '.com')) {
       			echo "E-mail Harus Sesuai Format E-mail!!!<br> <b>ex:</b> nyoba@gmail.com";
       		}
       	}

       	if ($_POST['com']>200 || $_POST['com']=="") {
       		echo "Komentar Tidak Boleh Kosong!!!";
       	}else{
       		$com = $_POST['com'];
       	}

        if ($booleans) {
        	$mysqli = "INSERT INTO t_ta5 VALUES('$nim', '$name',  '$email', '$tgl', '$jeniskelamin', '$prodi', '$fakultas', '$com')";
			$result = mysqli_query($conn,$mysqli);
			$_SESSION['check']=$nim;
			header('Location: Laman2.php');
        }
    }
?>