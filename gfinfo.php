<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$date=$_POST['dob'];
$gender=$_POST['r1'];
$addr1=$_POST['add1'];
$addr2=$_POST['add2'];
$contact=$_POST['cnum'];
$mail=$_POST['email'];
$aadhar=$_POST['anum'];
$ap=$_POST['afile'];
$photo=$_POST['pfile'];
 
$con= mysqli_connect("localhost","root","") or die ("connection is not established");
 mysqli_select_db($con,"smartcard") or die ("database not selected");
 
$x=mysqli_query($con,"insert into generalcard values('$fname','$mname','$lname','$date','$gender','$addr1','$addr2','$contact','$mail','$aadhar','$ap','$photo')") or die ("table not found");

if ((mysqli_affected_rows($con))>0)
{
	echo "<script> alert('values inserted');</script>";
}
?>