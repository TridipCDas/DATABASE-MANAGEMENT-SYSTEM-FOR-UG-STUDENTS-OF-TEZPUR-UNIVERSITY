<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<form action="student.php" method="post">
	<table align="center" width=50% style="font-size:20px;">
		<tr><td><a style="color:black"; href="front.php"><b>HOME</b></a></td></tr>
		<tr>
			<th>Roll No:&nbsp</th>
			<td><input type="text" name="ROLLNO" placeholder="Enter roll no" required></td>
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
			<th>Address:&nbsp</th>
			<td><input type="text" name="ADDRESS" placeholder="Enter address" required></td>
		</tr>
		<tr>
			<th>Sex:&nbsp</th>
			<td><input type="text" name="SEX" placeholder="Enter sex" required></td>
		</tr>
		<tr>
			<th>Phone No:&nbsp</th>
			<td><input type="tel" name="PHNNO" placeholder="****12345678" required></td>
		</tr>
		<tr>
			<th>Date of birth:&nbsp</th>
			<td><input type="text" name="DOB" placeholder="DD-MON-YEAR" required></td>
		</tr>
		<tr>
			<th>Hostel:&nbsp</th>
			<td><input type="text" name="HOSTEL" placeholder="Enter hostel name" required></td>
		</tr>
		<tr>
			<th>Department Name:&nbsp</th>
			<td><input type="text" name="DNAME" placeholder="Enter department name" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center" style="font-size:40px;"><input class="button" type="submit" name="submit" value="Submit" required></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
	include('my_connect_str.php');
	$rollno=$_POST['ROLLNO'];
	$fname=$_POST["FNAME"];
	$mname=$_POST["MNAME"];
	$lname=$_POST["LNAME"];
	$email=$_POST["EMAIL"];
	$add=$_POST["ADDRESS"];
	$sex=$_POST["SEX"];
	$phn=$_POST["PHNNO"];
	$dob=$_POST["DOB"];
	$hostel=$_POST["HOSTEL"];
	$dname=$_POST["DNAME"];
	
	$query1="INSERT into STUDENT (ROLLNO,FNAME,MNAME,LNAME,EMAIL,ADDRESS,SEX,DOB,HOSTEL,DNAME)
VALUES ('$rollno','$fname','$mname','$lname','$email','$add','$sex','$dob','$hostel','$dname')";
	$query2="INSERT into STUDENT_PHNO (ROLLNO,PHNNO)
VALUES ('$rollno','$phn')";
	$run1=@oci_parse($con_str,$query1);
	$run2=@oci_parse($con_str,$query2);
	if(@oci_execute($run1) && @oci_execute($run2)){
			print("Data inserted successfully");
	}
	else{
		print("Data can't be inserted");
		exit;
	}
}
?>
