<?php
$source=$_POST['source'];
$destination=$_POST['dest'];
$fare=$_POST['fare'];
$name=$_POST['cname'];
$eid=$_POST['ceid'];
$mob=$_POST['cmob'];
$nooftick=$_POST['numtick'];
// $id=mt_rand(1,10000);
$tcost=$nooftick*$fare;
$dt=date("Y-m-d");

if($fare!=0)
{
$con= mysqli_connect("localhost","root","");
 mysqli_select_db($con,"ticketinfo");
 $s=mysqli_query($con,"select * from customerinfo ");
  $t1 = mysqli_num_rows($s);
  $j = $t1 + 1;
 mysqli_query($con,"insert into customerinfo values('$j','$dt','$name','$eid','$mob','$source','$destination','$fare','$nooftick','$tcost')") or die("not inserted");
$s=mysqli_query($con,"select * from customerinfo where $j = '$j'");
$n=mysqli_affected_rows($con);
 if($n!=0)
 {
  echo "<table width='20%' height='40%'>";
  for ($i=0; $i < $n ; $i++)

	$r=mysqli_fetch_array($s,MYSQLI_NUM); 
  echo "<tr>";
  echo "<td>No. :".$r[0]."</td>";
  echo "<td>".$r[1]."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>From:"."<b>".$r[5]."</b>"."</td>";
  echo "<td >To:"."<b>".$r[6]."</b>"."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Cost:".$r[7]."</td>";
  echo "<td>No.of Tickets:".$r[8]."</td>";
  echo "</tr>";
  echo "<tr>"; 
  echo "<td colspan='2' align='center'>Total Cost :"."<b>".$r[9]."</b>"."</td>";
  echo "</tr>";
  echo "</table>";
  }
 }

else 
{	include ("fc2.php");}
?>