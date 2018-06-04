<!DOCTYPE html>
<html>
<head>	
<title>Student Form For Smart Card</title>
<style type="text/css">
	tr td
	{
		text-align: left;
		font-size: 20px;
	}
</style>
</head>
<body>
	<form name="sf" align="center" method="post" action="sfinfo.php">
		<h1 align="center"><b>Student Form</b></h1>
		<table border="0" align="center" cellspacing="10" cellpadding="10">
			<tr>
				<td>First Name : </td>
				<td><input type="text" name="fname" placeholder="First Name" pattern="[A-Za-z]{1,20}" title="Do not contain numbers" required></td>
			</tr>
			<tr>
				<td>Middle Name : </td>
				<td><input type="text" name="mname" placeholder="Middle Name" pattern="[A-Za-z]{1,20}" title="Do not contain numbers" required  ></td>
			</tr>	
			<tr>
				<td>Last Name : </td>
				<td><input type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z]{1,20}" title="Do not contain numbers" required  ></td>
			</tr>
			<tr>
				<td>Date of Birth : </td>
				<td><input type="Date" name="dob" required  ></td>
			</tr>
			<tr>
		    <td> Gender : </td>
			<td> <input type = radio name = r1 checked> Male
			 <input type = radio name = r1> Female</td>
			</tr>
			<tr>
				<td>Address line1 : </td>
				<td><input type="text" name="add1" placeholder="House/Flate no. ,name" required  >
				</td>
			</tr>
			<tr>
				<td>Address line2 : </td>
				<td><input type="text" name="add2" placeholder="Lane/Street" required   >
				</td>
			</tr>
			<tr>
				<td>Contact Number : </td>
				<td><input type="text" value="+91" size="1" readonly >
					<input type="text" name="cnum" pattern="[0-9]{10}" minlength="10" maxlength="10" title="Provide 10 digit valid number " required >
				</td>
			</tr>
			<tr>
				<td>Email-Id : </td>
				<td><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" title="Provide valid Email-Id" required></td>
			</tr>
			<tr>
				<td>Aadhar-Number : </td>
				<td><input type="text" name="anum"  pattern="[0-9]{12}" minlength="12" maxlength="12" title="Provide 12 digit valid number "  required  >
				</td>
			</tr>
			<tr>
				<td>Upload Aadhar : </td>
				<td><input type="file" name="afile"  required ></td>
			</tr>
			<tr>
				<td>Passport-size Photo : </td>
				<td><input type="file" name="pfile"  required ></td>
			</tr>
			<tr>
				<td>School/College Name: </td>
				<td><input type="text" name="scname" placeholder="Provide full name" required  ></td>
			</tr>
			<tr>
				<td>Upload School/College ID-card : </td>
				<td><input type="file" name="ifile"  required ></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Submit" ></td>
				<td><input type="reset" name="Reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	</body>
</html>