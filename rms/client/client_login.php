

<!DOCTYPE html>
<html>
<head>
	<title>
		TDM Recruiting Agency
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">


	<style type="text/css">
		.box11
		{
		    height: 450px;
		    width: 450px;
		    background-color: black;
		    margin: 0px auto;
		    opacity: .7;
		    color: white;
		    padding: 20px;
		}
	</style>

</head>

	
<body>

	<div class="wrap">
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
	</div>
		<section>
<!--
	<div class="box3">
		<form name="clilogin" action="" method="">
		<p style="font-size: 24px;">Login to your account </p><br>
		<input type="name" name="uname" placeholder="Username"><br><br>
		<input type="password" name="pass" placeholder="Passowrd"><br><br>
		<button>Login</button>
		</center>
		</form>
	</div>
-->

		<div class="log_img">
    <br> <br><br>
    <div class="box11">
        <h1 style="text-align: center; font-size: 35px;font-family: Verdana;">TDM Recruitment Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input type="submit" name="submit" value="Login" style="color: black; width: 70px; height:30px;">
      </div>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?<a style="color: white;" href="registration.php">Sign Up</a>
      </p>
      </form>
    </div>
  	</div>
</section>
<!--------------------------------->
<?php

if(isset($_POST['submit']))
{
	$count=0;
	$res=mysqli_query($db,"SELECT * FROM `registration` WHERE username='$_POST[username]' AND password='$_POST[password]'");
	$count=mysqli_num_rows($res);

	if($count==0)
	{
	
	?>
	<!--
	<script type="text/javascript">
		alert("The username doesn't exist.");
	</script> -->
	<div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white;">
            <strong>The username and password doesn't match</strong>
          </div>    
        
	}
	
	<?php
}
else{
	
		?>
		
		<script type="text/javascript">
			window.location = "joblist.php";
		</script>
		<?php
	}
}
?>
<!--
<?php


if(isset($_POST['submit']))
{
	$count=0;
	$res=mysqli_query($db,"SELECT * FROM `registration` WHERE username='$_POST[username]' AND password='$_POST[password]'");
	$count=mysqli_num_rows($res);

	if($count==0)
	{
	
	?>
	
	<script type="text/javascript">
		alert("The username doesn't exist.");
	</script> 	<div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white;">
            <strong>The username and password doesn't match</strong>
          </div>    
        
	}
	
	<?php
}
else{
		?>
		
		<script type="text/javascript">
			window.location = "";
		</script>
		<?php
	}
}
?>
-->

</body>
</html>