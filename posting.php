<!DOCTYPE html>
<html>
<head>
	<title>Posting</title>
</head>
<body>
	<h1>Mini Jurnalistik</h1>
	<form action=" " method="post">
		Secercah cerita<br>
		<textarea cols="80" rows="20" name="story">Masukan Cerita</textarea><br>
		Upload foto<br>
		<input type="file" name="photo"><br><br>
		<input type="submit" name="submit" value="Unggah">
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$story = $_POST['story'];
		$photo = $_POST['photo'];
		# code...

		$sql = "INSERT INTO upload value(' ', '$story', '$photo')";
		include "connect.php";
		if (mysqli_query($conn, $sql)){
			echo "Upload berhasil";
		}else{
			echo "Gagal Upload";
		}
	}
?>