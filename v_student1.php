<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style="color:black"; href="front.php"><b>HOME</b></a>
<div class="askadmin" align="center">
        <form action="v_student1.php" method="post">
		<input class="button" type="submit" name="submit_1" value="See All Information">
	</form>
	<form action="v_student1.php" method="post">
        <table align="center" width=50% style="margin-top:50px;">
				
				<tr>
                        <td> <b>Search by:</h3>&nbsp </b>
                        <td>
                                <select name="by" required="required">
                                        <option value="ROLLNO">ROLLNO</option>
                                        <option value="FNAME">FNAME</option>
                                        <option value="MNAME">MNAME</option>
                                        <option value="LNAME">LNAME</option>
                                        <option value="SEX">SEX</option>
                                        <option value="HOSTEL">HOSTEL</option>
                                        <option value="DNAME">DNAME</option>
                                </select>
                        </td>
                </tr>
        <tr>
                <td><b>Enter the search that you want to made:</b></td><td><input type="text" name="search" placeholder="Enter" required="required"></td></tr>
                <tr><td></td><td><input class="button" type="submit" name="submit" value="Search"></td></tr>
	</table>
        </form>
</div>

<br><br><table align="center" width="80%" border="1px solid red">
        <tr style="background-color:black;color:white;">
                <th>SL_NO</th>
                <th>ROLLNO</th>
                <th>FNAME</th>
                <th>MNAME</th>
                <th>LNAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>SEX</th>
                <th>DOB</th>
                <th>HOSTEL</th>
                <th>DEPT_NAME</th>
                <th>PH_NO</th>
        </tr>
<?php
        if(isset($_POST["submit"])){
                        include('my_connect_str.php');
                        $by=$_POST['by'];
                        $search=$_POST['search'];
                //print($by);
		//print($search);
        //$query="SELECT * FROM STUDENT,STUDENT_PHNO WHERE FNAME LIKE '%$search%'";
                        if($by=="FNAME"){
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND FNAME LIKE '%$search%'";
                        }
                        else if($by=="MNAME"){
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND MNAME LIKE '%$search%'";
                        }
                        else if($by=="LNAME"){
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND LNAME LIKE '%$search%'";
                        }
                        else if($by=="SEX"){
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND SEX='$search'";
                        }
                        else if($by=="HOSTEL"){
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND HOSTEL LIKE '%$search%'";
                        }
                        else if($by=="ROLLNO"){
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND STUDENT.ROLLNO LIKE '%$search%'";
                        }
                        else{
                                $query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO AND DNAME LIKE '%$search%'";
                        }

        $run=@oci_parse($con_str,$query);
        if(!@oci_execute($run)){
                print("querry can't be executed");
                exit;
        }
        else{
                //if(@oci_num_rows($run)<1){
                //<tr><td colspan="7"><?php print("No data Found!!")?>
                <?php
                //}
               // else{
                $count=0;
                while($data=@oci_fetch_assoc($run)){
                        $count++;
                        ?>
                        <tr>
                                <td> <?php print($count)?> </td>
                                <td><?php print($data["ROLLNO"])?></td>
								<td><?php print($data["FNAME"])?></td>
                                <td><?php print($data["MNAME"])?></td>
                                <td><?php print($data["LNAME"])?></td>
                                <td><?php print($data["EMAIL"])?></td>
                                <td><?php print($data["ADDRESS"])?></td>
                                <td><?php print($data["SEX"])?></td>
                                <td><?php print($data["DOB"])?></td>
                                <td><?php print($data["HOSTEL"])?></td>
                                <td><?php print($data["DNAME"])?></td>
                                <td><?php print($data["PHNNO"])?></td>
                        </tr>
                        <?php
                }
        }
}
else if(isset($_POST["submit_1"])){
	include('my_connect_str.php');
	$query="SELECT * FROM STUDENT INNER JOIN STUDENT_PHNO ON STUDENT.ROLLNO=STUDENT_PHNO.ROLLNO";
	$run=@oci_parse($con_str,$query);
        if(!@oci_execute($run)){
                print("querry can't be executed");
                exit;
        }
        else{
                //if(@oci_num_rows($run)<1){
                //<tr><td colspan="7"><?php print("No data Found!!")?>
                <?php
                //}
               // else{
                $count=0;
                while($data=@oci_fetch_assoc($run)){
                        $count++;
                        ?>
                        <tr>
                                <td> <?php print($count)?> </td>
                                <td><?php print($data["ROLLNO"])?></td>
								<td><?php print($data["FNAME"])?></td>
                                <td><?php print($data["MNAME"])?></td>
                                <td><?php print($data["LNAME"])?></td>
                                <td><?php print($data["EMAIL"])?></td>
                                <td><?php print($data["ADDRESS"])?></td>
                                <td><?php print($data["SEX"])?></td>
                                <td><?php print($data["DOB"])?></td>
                                <td><?php print($data["HOSTEL"])?></td>
                                <td><?php print($data["DNAME"])?></td>
                                <td><?php print($data["PHNNO"])?></td>
                        </tr>
                        <?php
                }
        }
}
//}
?>
</table>
</body>
</html>
