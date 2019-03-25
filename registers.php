<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<form action="registers.php" method="post">
	<table align="center" width=50% style="font-size:20px;">
		<tr><td><a style="color:black"; href="front.php"><b>HOME</b></a></td></tr>
		<tr>
			<th>ROLL NO:&nbsp</th>
			<td><input type="text" name="ROLLNO" placeholder="Enter a valid Roll No" required></td>
		</tr><br>
		<tr>
			<th>COURSE ID:&nbsp</th>
			<td><input type="text" name="COURSE_ID" placeholder="Enter a valid Course ID" required></td>
		</tr><br>
		<tr>
			<th>Grade:&nbsp</th>
			<td><input type="text" name="GRADE" placeholder="Enter Grade" required></td>
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
	$roll=$_POST["ROLLNO"];
	$cid=$_POST['COURSE_ID'];
	$grade=$_POST["GRADE"];
	
	$query1="INSERT INTO REGISTERS(ROLLNO,COURSE_ID,GRADE) VALUES ('$roll','$cid','$grade')";
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
