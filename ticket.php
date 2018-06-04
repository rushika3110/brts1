<html>
<head>
	<title>Ticket form</title>
	<style type="text/css">
		body
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<form name="tf" method="POST" action="printticket.php" onsubmit="validate();">
		<table align="center" border="0">
			<tr>
				<td>
					Source:
				</td>
				<td><input type="text" name="source" value="<?php echo $_GET['ca']; ?>" readonly></td>
			</tr>
			<tr>
				<td>
					Destination:
				</td>
				<td><input type="text" name="dest" value="<?php echo $_GET['cb']; ?>" readonly></td>
			</tr>
			<tr>
				<td>
					Fare:
				</td>
				<td><input type="text" name="fare" value="<?php echo $_GET['m']; ?>" readonly></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="cname" pattern="[A-Za-z]{1,20}" title="Do not contain numbers" required></td>
			</tr>
			<tr>
				<td>Email id :</td>
				<td><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="ceid" title="Provide valid Email-Id" required></td>
			</tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" value="+91" size="1" readonly>
					<input type="text" name="cmob" pattern="[0-9]{10}" minlength="10" maxlength="10" title="Provide 10 digit valid number " required></td>
			</tr>
			<tr>
				<td>
					No. Of Tickets
				</td>
				<td>
					<input type="Number" name="numtick" min="1" max="5" placeholder="Number of Tickets">
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" name="submit" value="Print Ticket">
				</td>
			</tr>
		</table>
		<!--<?php
   /* if(isset($_POST['submit']))
    {    $a=$_POST['fare'];
       $host=$_SERVER['HTTP_HOST'];
    if($a!=0)
    {
       header("location:http://{$host}/printticket.php");
    }
}*/
?> -->
	<script type="text/javascript">
		function validate()
		{
			if(document.tf.fare.value==0)
			{
				alert("Same Source and Destination");
			}
		}
	</script>
	</form>
 </body>
</html>