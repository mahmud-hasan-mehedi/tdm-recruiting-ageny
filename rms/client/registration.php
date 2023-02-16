<?php
include "connection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		TDM Recruiting Agency
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">

<head>
	
<body>

	<div class="wrapper">
		<header>
			<div class="lg">
			<img src="images/lg.ico">
			<h3> &nbsp TMD Recruting Agency</h3>
			</div>	
			<nav>
				<ul> 
					<li><a href="index.php">Home</a></li>
					<li><a href="about_us.php">About_Us</a></li>
					<li><a href="client_login.php">Client_Login</a></li>
					<li><a href="registration.php">Registration</a></li>
					<li><a href="admin_login.php">Admin_Login</a></li>
				</ul>
			</nav>
		</header>
<section>
		<div class="box6">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">TMD Recuriting Agency Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="first" placeholder="First Name" required=""> <br><br>
          <input type="text" name="last" placeholder="Last Name" required=""> <br><br>
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input type="text" name="phn" placeholder="Contact No" required=""><br><br>

          <input type="text" name="email" placeholder="Email" required=""><br><br>
          <input  type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px">
      </div>
      </form>
     </div>
    </div>
</section>
<?php
	
	if(isset($_POST['submit']))
			{
				$count=0;
				$sql="SELECT username from registration";
				$res=mysqli_query($db,$sql);

				while($row=mysqli_fetch_assoc($res))
				{
					if($row['username']==$_POST['username'])
					{
						$count++;
					}
				}
	if($count==0){
		mysqli_query($db,"INSERT INTO `registration` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[phn]','$_POST[email]') ");
	

	?>
	
	
	<script type="text/javascript">
		alert("Registration Successful");
	</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
		alert("The username already exist.")
	</script>
	
<?php
}
}
?>

		
</body>
</html>
