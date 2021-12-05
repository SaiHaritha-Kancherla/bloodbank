<?php
	
	
	$conn=mysqli_connect("localhost","root","","signupdb")  or die("Connection Failed");
	if(!empty($_POST['submit']))
	{
		$uname=$_POST['user'];
		$pswd=$_POST['pswd'];
		$query="select * from signuptable where  username='$uname' and password='$pswd'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			header("Location: main.html");
			
		}
		else{
			echo "<script>alert('Login failed');</script>";
		}
		
	}
		
	
	
?>










<!DOCTYPE html>
<html>
	<head> 
		<title>LOGIN</title>
	</head>
	<style>
	.lh{
		float:right;
	}
	body
{
background-image: url('im1.jpg');
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	.centerdiv{
	
	display:flex;
	justify-content:center;
	align-items:center;
}
form
{
font-size:30px;
color:black;
margin-top:none;
}
img{
height:100px;
width:100px;
float:left;
margin-top:0px;
}
.tb{
	background-image:url("usimg.png");   
background-position:right;   
background-repeat:no-repeat;   
width: 200px;
height: 30px;
background-size: 30px;
margin-top:none;
}
.header1{
	color:white;
	margin-left:350px;
	margin-bottom:0px;
	font-size:55px;
}
.sub{
	margin-left:130px;
}
.centerdiv{
	
	display:flex;
	justify-content:center;
	align-items:center;
	margin-top:none;
	background-color:white;
	border-radius: 25px;
  margin-left:390px;
  margin-right:400px;
  text-color:black;
  margin-top:none;
}
.ps{
background-image:url("psimg.png");   
background-position:right;   
background-repeat:no-repeat;   
width: 200px;
height: 30px;
background-size: 30px;
}

.bu{
  background-color: #f44336; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  border-radius:25px;
}
.bu:hover{
	-webkit-transform:scale(1.1);
	-ms-transform:scale(1.1);
	transform:scale(1.2);
}
img{
border-radius:50%;
height:100px;
}
</style>
	<body>
	
	<main>
	 <div class="aud">
	 <a onclick="playsong()"  href="javascript:;" onblclick="pausesong()">
	 <img src="girl.jpeg">
	 </a>
	 </div>
	 </main>
	<script>
	var mysong= new Audio();
		 mysong.src='loau.mp3';
		 const playsong= () =>{
		 mysong.play()
		 }
		 const pausesong= () =>{
		 mysong.pause()
		 }
		 
		 </script>
	<a class="lh" href="Static.html" ><img src="ho.png"  alt="return to home"></a> 
	
		
	
		<p class="header1">LIFE SAVER BLOOD BANK</p>
		
	
	<form method="post"  >
	<table class="centerdiv" border ="0"  align="center">
	<tr>
		<td colspan="2"  style="color:red;"  align="center"><h3>LOGIN</h3></td>
	</tr>
	<tr>
		<td ><b>Username : </td>
		<td><input type="text" class="tb"  name="user">
		
		</b></td></br>
	</tr>	
	<tr>
		<td><b>Password :</td>
		<td><input type="password" name="pswd"  class="ps" maxlength="12" required/></b></td></br></br>
	</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr><tr>
		</tr>
		
		<tr>
		<td colspan="2"  align="center"><input type="submit"  name="submit" class="bu"  value="Login"></td>
	</tr>
	</table>
	</form>
	
	</body>
	
</html>