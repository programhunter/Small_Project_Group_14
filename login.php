<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>


<?php
		require('db.php');
		session_start();
		// If form submitted, insert values into the database.
		if (isset($_POST['email'])){
			// removes backslashes
			$email = stripslashes($_REQUEST['email']);
			//escapes special characters in a string
			$email = mysqli_real_escape_string($con,$email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			//Checking is user existing in the database or not
			$query = "SELECT * FROM `users` WHERE email='$email'
							and password='".md5($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			
			
			
			
			
			
					if($rows==1){
							$_SESSION['email'] = $email;
							// Redirect user to index.php
							header("Location: user.php");
         
					}
					
					else
					{
							/*echo "<div class='form'>
									<h3>Username/password is incorrect.</h3>
									<br/>Click here to <a href='login.php'>Login</a></div>";*/
									
							echo '<script type="text/javascript">'; 
							echo 'alert("please try again");'; 
							echo 'window.location.href = "login.php";';
							echo '</script>';
									
					}
							}
							else
							{
	?>







    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Best Contact Manager</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php">Home </a></li>
                    <li class="active" role="presentation"><a href="login.php">Log In </a></li>
                    <li role="presentation"><a href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero" style="background-image:url(&quot;null&quot;);color:rgb(85,85,85);background-color:rgb(255,204,0);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="font-size:60px;color:rgb(255,255,255);text-shadow:2px 2px 3px rgba(0,0,0,0.3);">Login </h1>
                    <div class="login-card" style="background-color:rgb(255,254,255);"><img src="assets/img/avatar_2x.png" class="profile-img-card">
                        <p class="profile-name-card"> </p>
                        <form action="" method="post" class="form-signin"><span class="reauth-email"> </span>
                            <input class="form-control" type="email" name="email" required="" placeholder="Email address" autofocus="" >
                            <input class="form-control" type="password" name="password" required="" placeholder="Password" >
                            <div class="checkbox">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Remember me</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                        </form>
						
						<?php } ?>
						
						
						
                </div>
            </div>
        </div>
    </div>
	
	
<!--    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Some Fancy App © 2018</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
-->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>