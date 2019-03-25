<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<form action="course.php" method="post">
	<table align="center" width=50% style="font-size:20px;">
		<tr><td><a style="color:black"; href="front.php"><b>HOME</b></a></td></tr>
		<tr>
			<th>COURSE ID:&nbsp</th>
			<td><input type="text" name="COURSE_ID" placeholder="Enter COURSE ID" required></td>
		</tr><br>
		<tr>
			<th>COURSE Name:&nbsp</th>
			<td><input type="text" name="CNAME" placeholder="Enter course name" required></td>
		</tr><br>
		<tr>
			<th>Lecture Credits&nbsp</th>
			<td><input type="text" name="L" placeholder="Enter Lecture Credits" required></td>
		</tr>
		<tr>
			<th>Theory Credits:&nbsp</th>
			<td><input type="text" name="T" placeholder="Enter Theory Credits" required></td>
		</tr>
		<tr>
			<th>Practical Credits:&nbsp</th>
			<td><input type="text" name="P" placeholder="Enter Practical Credits" required></td>
		</tr>
		<tr>
			<th>Programme Name:&nbsp</th>
			<td><input type="text" name="PNAME" placeholder="Enter Programme name" required></td>
		</tr>
		<tr>
                        <th>Department Name:&nbsp</th>
                        <td><input type="text" name="DNAME" placeholder="Enter Department name" required></td>
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
	$cid=$_POST['COURSE_ID'];
	$cname=$_POST["CNAME"];
	$l=$_POST['L'];
	$t=$_POST["T"];
	$p=$_POST["P"];
	$pname=$_POST["PNAME"];
	$dname=$_POST["DNAME"];
	
	$query1="INSERT INTO COURSE(COURSE_ID,CNAME,L,T,P,PNAME,DNAME) VALUES ('$cid','$cname','$l','$t','$p','$pname','$dname')";
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
