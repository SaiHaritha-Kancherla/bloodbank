<?php

	session_start();
	
	if(isset($_POST['submit']))
	{
		$conn=mysqli_connect("localhost","root","","donate");
		$name=$_POST['donarname'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$phoneno=$_POST['phoneno'];
		$age=$_POST['age'];
		$pincode=$_POST['pincode'];
		$state=$_POST['state'];
		$bg=$_POST['bg'];
		
		$query="INSERT INTO donatetable(NAME,GENDER,EMAIL,PHONENO,AGE,PINCODE,STATE,BLOODGROUP)
				VALUES('$name','$gender','$email','$phoneno','$age','$pincode','$state','$bg')";
		$query_run=mysqli_query($conn,$query);
		if($query_run)
		{
			$_SESSION['status']="Donar Registration Completed Successfully";
			echo "success";
			$con=mysqli_connect("localhost","root","","bg");
			$bg=$_POST['bg'];
			$quer="UPDATE bgt SET n=n+1 where tbg='$bg'";
			$query_ru=mysqli_query($con,$quer);
			
			
			echo "<script type='text/javascript'>window.top.location='main.html';</script>";
			echo "<script>alert('Donar Enrolled Successfully!!!');</script>";
			
			
			$conn->close();
			$con->close();			
	
		}
		else
		{
			$_SESSION['status']="Donar Registration not done";
			
			echo "<script type='text/javascript'>window.top.location='main.html';</script>";
			echo "<script>alert('Donar Enrolled Unsuccessful!!!');</script>";
					
			unset($_SESSION['status']);			
		}
		


 }
?>

































<!DOCTYPE HTML>
<html>
	<head>
		<title>DONATE</title>
	</head>
	<style>
	body
{

-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-image:url("bgdonor.jpg");
  height: 100%; 
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
background-image{
	opacity:100%;
}
	.centerdiv{
	padding-left:50px;
	display:flex;
	justify-content:center;
	align-items:center;
}
form
{
font-size:30px;
color:white;
}
img{
height:100px;
width:100px;
float:left;
margin-top:0px;
opacity:75%;
}
.header1{
	color:white;;
	margin-left:180px;
    height: 50%;
	
	font-size:30px;
    text-shadow: 2px 2px black;
	margin-bottom:none;
}
.bu{
  background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  border-radius:25px;
  margin-left:300px;
}
.bu:hover{
	-webkit-transform:scale(1.1);
	-ms-transform:scale(1.1);
	transform:scale(1.1);
}
.sub{
	margin-left:130px;
}
.tabledec{
    border: 2px solid black;
    background-color: #dbed0e;
	padding-right:10px;
	padding-left:80px;
	font-size:20px;
	background-size: cover;
  background-image:url("dbg.jpg");
  
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	
}
.le{
	margin-left:none;
	margin-top:200px;
	float:right;
}
.img1{
	float:right;
	
	
}
.donate{
	margin-left:250px;
}
</style>
	<body>
	
		<div class="header1" >
			<h1>LIFE SAVER BLOOD BANK</h1>
		</div>	
		<div class="centerdiv">
	<table class="tabledec"   width="400px;">
	<form method="POST"  >
	<caption style="text-align:center;color:black; color:white; "align="center"  ><h1>DONOR FORM</h1></caption>
		<tr><td><label><font color="black"><h3><b>Donor Name:</b></h3></font></label></td>
<td> <input type="text"  name="donarname" required></td></tr>
			<tr><td><label><font color="black"><h3><b>Father's Name:</b></h3></font></label></td> 
<td><input type="text" name="freceivername"required></td></tr>
			<tr><td><label><font color="black"><h3><b>Gender:</b></h3></font></label></td>
<td><input type="radio" name="gender" value="Male" >Male
			<input type="radio" name="gender"  value="Female">Female</td></tr>
			 <tr>
                    <td><label><font color="black"><h3><b>E-mail ID:</b></h3></font></label></td>
                    <td><input type="email" name="email" ></td>
                </tr>
			 <tr>
                    <td><label><font color="black"><h3><b>Phone Number:</b></h3></font></label></td>
                    <td><input type="tel" name="phoneno" pattern="[0-9]{10}" required></td>
                </tr>
			<tr><td><label><font color="black"><h3><b>Age:</b></h3></font></label></td><td><input type="number" name="age" min="18" max="65" required></td></tr>
                        <tr>
                    <td><label><b>Address:</b></label></td>
                    <td><textarea id="address" name="address" rows="4" cols="30"></textarea></td>
                </tr>
		    <tr><td><label><b>State:<b></label></td>
                    <td><select name="state" id="state">
                    <option value="andhrapradesh">Andhra Pradesh</option>
                    <option value="arunachalpradesh">Arunachal Pradesh</option>
                    <option value="assam">Assam</option>
                    <option value="bihar">Bihar</option>
                    <option value="chhattisghar">Chhattisghar</option>
                    <option value="goa">Goa</option>
                    <option value="gujarath">Gujarat</option>
                    <option value="haryana">Haryana</option>
                    <option value="himachalpradesh">Himachal Pradesh</option>
                    <option value="jharkhand">Jharkhand</option>
                    <option value="karnataka">Karnataka</option>
                    <option value="kerela">Kerela</option>
                    <option value="madhyapradesh">Madhya Pradesh</option>
                    <option value="maharashtra">Maharashtra</option>
                    <option value="manipur">Manipur</option>
                    <option value="meghalaya">Meghalaya</option>
                    <option value="mizoram">Mizoram</option>
                    <option value="nagaland">Nagaland</option>
                    <option value="odisha">Odisha</option>
                    <option value="punjab">Punjab</option>
                    <option value="rajasthan">Rajasthan</option>
                    <option value="sikkim">Sikkim</option>
                    <option value="tamilnadu">Tamilnadu</option>
                    <option value="telengana">Telengana</option>
                    <option value="tripura">Tripura</option>
                    <option value="uttarakhand">Uttarakhand</option>
                    <option value="uttarpradesh">Uttar Pradesh</option>
                    <option value="westbengal">West Bengal</option>
                    </select></td>
</tr>
		<tr><td><label><font color="black"><h3><b>Pin code:</b></h3></font></label></td>
                    <td><input type="text" name="pincode" required></td></tr>
		<tr><td><p><label><b>Blood Group of donor:</b></label><br>
<td><input type="radio" name="bg" id="A+" value="A+">A+&nbsp
<input type="radio" name="bg"   id="O+" value="O+" >O+&nbsp
<input type="radio" name="bg" id="B+" value="B+" >B+&nbsp
<input type="radio" name="bg"  id="AB+"value="AB+" >AB+<br>
<input type="radio" name="bg" id="A-" value="A-" >A-&nbsp&nbsp
<input type="radio" name="bg" id="O-" value="O-" >O-&nbsp&nbsp
<input type="radio" name="bg" id="B-" value="B-" >B-&nbsp&nbsp
<input type="radio" name="bg"  id="AB-" value="AB-">AB-</td>
</p></td></tr>

<tr><td><input type="submit"  name="submit" class="bu"  onclick="don()" value="donate"  ></td></tr> 
	</form>	
	</body>
</html>