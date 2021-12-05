<html>

<style>
	body{
		background-image:url("avbg1.jpg");
		background-repeat:none;
		background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height:100%;
  width:100%;
	}
</style>
</head>
<body>
<?php
    $con=mysqli_connect("localhost","root","","bg");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM bgt");
	?> <h1 align="center"> Availabilty of blood samples</h1><?php
	?><table border='1' cellpadding='1' cellspacing='1' align='center'  width="400" height="500" color="red" bgcolor="pink" style="text-color:white;text-align:center">
		<tr>
			<th>Blood Sample</th>
			<th>No of samples (each 350ml)</th>
		</tr>
	<?php
		
    while($row = mysqli_fetch_array($result))
      {
		 ?> <tr>
		 <td><?php echo $row['tbg'] ?></td>
		<td><?php echo 	$row['n']; ?></td></tr>
		<?php
      
      }
	?></table>
	<?php
    mysqli_close($con);
    ?>
</body>
</html>
