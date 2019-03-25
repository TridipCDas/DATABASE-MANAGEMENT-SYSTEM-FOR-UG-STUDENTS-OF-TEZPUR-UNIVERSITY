<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image2.jpg">
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style="color:black"; href="front.php"><b>HOME</b></a>
<table align="center" width="80%" border="1px solid red">
        <tr style="background-color:black;color:white;">
                <th>SL_NO</th>
                <th>DEPARTMENT_NAME</th>
        </tr>
<?php

include('my_connect_str.php');
$query="SELECT * FROM DEPARTMENT";
$run=@oci_parse($con_str,$query);
if(!@oci_execute($run)){
	print("Problem in runing the query");
	exit;
}
else{
        //if(@oci_num_rows($run)<1){
          //  <tr><td colspan="7"><?php print("No data Found!!")?>
            <?php
        //}
       // else{
            $count=0;
            while($data=@oci_fetch_assoc($run)){
                $count++;
                ?>
                <tr>
                    <td> <?php print($count)?> </td>
                    <td><?php print($data["DNAME"])?></td>
                </tr>
                <?php
            }
	//	}
}
?>
</table>
</body>
</html>
