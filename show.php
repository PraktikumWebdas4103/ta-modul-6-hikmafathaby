<?php
	include "connect.php";
	$query = mysqli_query($conn ,"SELECT * FROM registrasi ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
</head>
<body>
<h1>Menampilkan Data</h1>
<center>
	<form action="" method="post">
    <table border="1" rules="all" style="width: 100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Fakultas</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["name"];?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["class"];?></td>
            <td><?php echo $data["gender"];?></td>
            <td><?php echo $data["hobby"];?></td>
            <td><?php echo $data["faculty"];?></td>
            <td><?php echo $data["address"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
</center>
</body>
</html>