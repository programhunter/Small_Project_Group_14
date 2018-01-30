<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contacts</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit1.css">
</head>

<body>
	
	<?php 
	
	require('db.php');
	require('auth.php');
		
		if (isset($_REQUEST['name']))
			{
				 
				$name = stripslashes($_REQUEST['name']);
				$name = mysqli_real_escape_string($con,$name);
				
				$input_email = stripslashes($_REQUEST['input_email']);
				$input_email = mysqli_real_escape_string($con,$input_email);
				
				$phone = stripslashes($_REQUEST['phone']);
				$phone = mysqli_real_escape_string($con,$phone);
				
				$address = stripslashes($_REQUEST['address']);
				$address = mysqli_real_escape_string($con,$address);
				
				$created_by = '';
				$created_by = $_SESSION['email'];
				
				$query = "INSERT into `contact_info` (name, email, phone, address, created_by) VALUES ('$name', '$input_email', '$phone', '$address', '$created_by')";
				
				$result = mysqli_query($con,$query);
				
				if($result)
				{
					/*echo 
						"<h5 id='head' >Contact Created</h5>
						<br/>
					*/
						header("Location: user.php");
				
				}
					else
					{
						echo "<h4 id='head' >an error occured:" . mysqli_error($con);
					}
			}
			
			else{
			
		?>
		
		
		
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="user.php">Best Contact Manager</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="logout.php">Log Out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero" style="background-image:url(&quot;null&quot;);color:rgb(85,85,85);background-color:rgb(255,204,0);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="font-size:60px;color:rgb(255,255,255);text-shadow:2px 2px 3px rgba(0,0,0,0.3);">Add Contact</h1>
                    <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
                        <p class="profile-name-card"> </p>
						
						
		
		<form name = "sign_form" action="" method="post" class="form-signin"> <span class="reauth-email"> </span>
            <input class="form-control" type="text" name="name" placeholder="Name" autofocus=""  required/>
            <input class="form-control" type="email" name="input_email" placeholder="Email">
			<input class="form-control" type="text" name="phone" placeholder="Phone">
			<input class="form-control" type="text" name="address" placeholder="Address">
                          
                            
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit" >Register </button>
        </form>				
		
						
		<?php } ?>	
                            
        </div>
    </div>
	
	
	
</body>

</html>