<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body style="font-family: century gothic">
	<h1>Input Data</h1>
	<center>
	<hr>
	<form action=" " method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="number" name="nim" minlength="10">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="name" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<input type="radio" name="class" value="MI41-01">01<br>
					<input type="radio" name="class" value="MI41-02">02<br>
					<input type="radio" name="class" value="MI41-03">03<br>
					<input type="radio" name="class" value="MI41-04">04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="gender" value="Male">Laki-laki<br>
					<input type="radio" name="gender" value="Female">Perempuan<br>
					<input type="radio" name="gender" value="prefer not to say">Prefer not to Say
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>
					<input type="checkbox" name="hobby" value="Sleep">Sleep<br>
					<input type="checkbox" name="hobby" value="Traveling">Traveling<br>
					<input type="checkbox" name="hobby" value="Hiking">Hiking
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
					<select name="faculty">
						<option value="Ilmu Terapan">Ilmu Terapan</option>
						<option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>
						<option value="Elektro">Elektro</option>
						<option value="*******">********</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="address" style="height: 100px"></td>
			</tr>
			<tr>
				<td></td>
				<td align="right">
					<input type="submit" name="submit" value="Input">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	</center>
</body>
</html>
<?php
	include 'connect.php';
	if (isset($_POST['submit'])){
		$name= $_POST['name'];
		$nim = $_POST['nim'];
		$class = $_POST['class'];
		$gender = $_POST['gender'];
		$hobby = $_POST['hobby'];
		$faculty = $_POST['faculty'];
		$address = $_POST['address'];

		$sql = "INSERT INTO registrasi(name,nim,class,gender,hobby,faculty,address) values ('$name','$nim','$class','$gender','$hobby','$faculty','$address')";
		if (strlen($name) >= 35) {
				die("Nama jangan lebih dari 35 karakter". mysqli_connect_error());
			}
		if (strlen($nim) != 10){
			die("nim harus 10 karakter". mysqli_connect_error());

		}
		if (mysqli_query($conn, $sql)){
			echo "Registrasi Telah Berhasil";
		}else{
			echo "Gagal Regis";
		}
	}
?>