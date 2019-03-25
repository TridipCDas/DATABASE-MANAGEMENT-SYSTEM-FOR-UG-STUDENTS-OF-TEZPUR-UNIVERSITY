<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<form action="programme.php" method="post">
	<table align="center" width=50% style="font-size:20px;">
		<tr><td><a style="color:black"; href="front.php"><b>HOME</b></a></td></tr>
		<tr>
			<th>Programme Name:&nbsp</th>
			<td><input type="text" name="PNAME" placeholder="Enter Programme Name" required></td>
		</tr><br>
		<tr>
			<th>Duration:&nbsp</th>
			<td><input type="text" name="DURATION" placeholder="Enter Duration" required></td>
		</tr><br>
		<tr>
			<th>Department Name:&nbsp</th>
			<td><input type="text" name="DNAME" placeholder="Enter department name" required></td>
		</tr>
								
<td colspan="2" align="center" style="font-size:40px;"><input class="button" type="submit" name="submit" value="Submit" required></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
	include('my_connect_str.php');
	$pname=$_POST['PNAME'];
	$dur=$_POST["DURATION"];
	$dname=$_POST["DNAME"];
	
	$query1="INSERT INTO PROGRAMME(PNAME,DURATION,DNAME) VALUES ('$pname','$dur','$dname')";
	$run1=@oci_parse($con_str,$query1);
	if(@oci_execute($run1)){
			print("Data inserted successfully");
	}
	else{
		print("Data can't be inserted");
		exit;
	}
}
?>
