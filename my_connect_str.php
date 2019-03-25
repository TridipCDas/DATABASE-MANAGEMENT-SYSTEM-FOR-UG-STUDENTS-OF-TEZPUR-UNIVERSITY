<?php
 $con_str =@oci_connect("chiranjib_csb16", "chiranjib", "192.168.125.4/oracle10");
    if (!$con_str)
        {
       $err =@oci_error();
       print("Coulnot connect");
	exit;
     }



?>
