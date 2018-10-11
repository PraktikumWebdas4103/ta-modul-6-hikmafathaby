
<body bgcolor="#c6e2ff">

<?php
		if(isset($_POST['submit'])){
			$usid = $_POST['usid'];
			$pass = $_POST['pass'];

			if(isset($_POST["data"])){
			$data = $_POST['data'];
			$data.= $usid."*".$pass."||";

		}else $data = "";

		}
?>

<form action=" " method="POST">
	<center>
		<table>
			<tr>
				<td>Username</td>
				<td> : </td>
				<td><input type="text" name="usid" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"></td>
			</tr>
			<tr>
		 		<td>Password</td>
		 		<td> : </td>
		 		<td><input type="Password" name="pass" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"></td>
		 	</tr>

		<?php
				if(isset($data)){ ?>
					<input type="hidden" name="data" value="<?php echo $data; ?>">
					<?php
			}
					?>
			<tr>
				<td style="padding-bottom: 10px"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>	
		</table>
	</center>
</form>

<?php
		if(isset($_POST['submit'])){
			$arra = explode("||", $data);
			$detail = array();
			for($x = 0; $x < count($arra); $x++){
				array_push($detail, explode("*", $arra[$x]));
			}
			print_r($detail);
			echo "<h3>FORM LOGIN</h3>
				<table border = 1>
				<tr>
					<td width = "."100px"."><b><center>User ID</td>
					<td width = "."100px"."><b><center>Password</td>
				</tr>";

		for ($x = 0; $x < count($detail)-1  ; $x++) { 
			echo "<tr>";
				echo "<td>";
					echo $detail[$x][0];
				echo "</td>";
				echo "<td>";
					echo $detail[$x][1];
				echo "</td>";
			echo"</tr>";
		}
		echo "</table>";
		
	
	}
?>

</body>