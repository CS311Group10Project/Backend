<!DOCTYPE html>
<html>
<head>
	<title>Tables in Database</title>
</head>
<body>

	<table>
		<tr>
			<th>ID</th>
			<th>Patient's Name</th>
			<th>Gender</th>
			<th>Email</th>
		</tr>
	</table>

	<?php
		$conn = mysqli_connect("localhost", "root", "", "register");

		if($conn -> connect_error){
			die("Connection Failed:". $conn -> connect_error);
		}

		$sql = "SELECT id, username, gender, email from register";
		$result = $conn -> query($sql);

		if($result -> num_rows > 0){
			while ($row = $result -> fetch_assoc()) {
				echo "<tr>&nbsp<td>".$row["id"]."</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td>".$row["username"]."</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td>".$row["gender"]."</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td>".$row["email"]."</td></tr><br>";
			}

			echo "</table>";
		}

		else{
			echo "0 result";
		}

		$conn -> close();
	?>

</body>
</html>