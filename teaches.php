<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<form action="teaches.php" method="post">
	<table align="center" width=50% style="font-size:20px;">
		<tr><td><a style="color:black"; href="front.php"><b>HOME</b></a></td></tr>
		<tr>
			<th>COURSE ID:&nbsp</th>
			<td><input type="text" name="COURSE_ID" placeholder="Enter a valid Course ID" required></td>
		</tr><br>
		<tr>
			<th>INSTRUCTOR ID:&nbsp</th>
			<td><input type="text" name="INST_ID" placeholder="Enter a valid Instructor Id" required></td>
		</tr><br>
		<tr>
			<th>FEEDBACK:&nbsp</th>
			<td>
				<select name="FEEDBACK" required="required">
					<option value="POOR">POOR</option>
					<option value="AVERAGE">AVERAGE</option>
					<option value="GOOD">GOOD</option>
					<option value="EXCELLENT">EXCELLENT</option>
				</select>
			</td>
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
	$insid=$_POST['INST_ID'];
	$feedback=$_POST["FEEDBACK"];
	
	$query1="INSERT INTO TEACHES(COURSE_ID,INST_ID,FEEDBACK) VALUES ('$cid','$insid','$feedback')";
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
