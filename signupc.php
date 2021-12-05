<?php
	function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}




	$username=filter_input(INPUT_POST,'username');
	$password=filter_input(INPUT_POST,'password');
	$p2=filter_input(INPUT_POST,'rpss');
	if(!empty($username))
	{
		if(!empty($_POST["password"]))  {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["rpss"]);
		if($_POST["password"] != $_POST["rpss"])
		{
			echo "<script>alert('Re enter password correctly');</script>";
			echo "<script type='text/javascript'>window.top.location='signup.html';</script>";
		}
        if (strlen($_POST["password"]) <= '8') {
            echo "<script>alert('Your Password Must Contain At Least 8 Characters!');</script>";
			echo "<script type='text/javascript'>window.top.location='signup.html';</script>";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Number!');</script>";
			echo "<script type='text/javascript'>window.top.location='signup.html';</script>";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Capital Letter!');</script>";
			echo "<script type='text/javascript'>window.top.location='signup.html';</script>";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter!');</script>";
			echo "<script type='text/javascript'>window.top.location='signup.html';</script>";
        }
		
		
		else{
				
			
			$conn=new mysqli ("localhost","root","","signupdb");
			
			if(mysqli_connect_error())
			{
				die('Connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
			}
			else
			{
				$check_username = mysqli_query($conn,"SELECT username FROM signuptable WHERE username='$username'");	
				if(mysqli_num_rows($check_username) > 0){
					echo "<script>alert('Username already exists');</script>";		
					echo "<script type='text/javascript'>window.top.location='signup.html';</script>"; exit;
				}
				else{
					
					$result = mysqli_query($conn, "INSERT INTO signuptable(username, password) VALUES ('$username','$password')");
					header("Location: main.html");
				}
				$conn->close();
			
			}
				}			
						
		}
		else{
			echo "<script>alert('Password should not be empty');</script>";	
			die();
		}
	}
	else
	{
		echo "Username should not be empty!!!";
		die();
	}
?>






