<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<form action="instructor.php" method="post">
	<table align="center" width=50% style="font-size:20px;">
		<tr><td><a style="color:black"; href="front.php"><b>HOME</b></a></td></tr>	
		<tr>
			<th>INSTRUCTOR ID:&nbsp</th>
			<td><input type="text" name="INST_ID" placeholder="Enter Instructor ID" required></td>
		</tr><br>
		<tr>
			<th>First Name:&nbsp</th>
			<td><input type="text" name="FNAME" placeholder="Enter first name" required></td>
		</tr><br>
		<tr>
			<th>Middle Name:&nbsp</th>
			<td><input type="text" name="MNAME" placeholder="Enter middle name" required></td>
		</tr>
		<tr>
			<th>Last Name:&nbsp</th>
			<td><input type="text" name="LNAME" placeholder="Enter last name" required></td>
		</tr>
		<tr>
			<th>Email:&nbsp</th>
			<td><input type="text" name="EMAIL" placeholder="Enter email" required></td>
		</tr>
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
	$inst=$_POST['INST_ID'];
	$fname=$_POST["FNAME"];
	$mname=$_POST["MNAME"];
	$lname=$_POST["LNAME"];
	$email=$_POST["EMAIL"];
	$dname=$_POST["DNAME"];
	
	$query1="INSERT INTO INSTRUCTOR(INST_ID,FNAME,MNAME,LNAME,EMAIL,DNAME) VALUES ('$inst','$fname','$mname','$lname','$email','$dname')";
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

