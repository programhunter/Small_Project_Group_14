<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contacts</title>
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
	
		require('auth.php');
		require('db.php');
		
		$current_user = '';
		$current_user = $_SESSION['email'];
	
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
				
				
                    <h3 class="text-center" style="color:#ffffff;"><?php echo $current_user ?> </h3></div>
				
			<div class="col-md-12">
                    <form class="search-form" action='' method='post'><a class="btn btn-success" role="button" href="new_contact.php" style="float:right;margin:0px 0px 0px 5px;font-family:'Source Sans Pro', sans-serif;">New contact</a>
                        
						<div class="input-group">
                            <div class="input-group-addon"><span><i class="glyphicon glyphicon-search"></i></span></div>
                            
							<input class="form-control" type="text" name="search_submit_input" placeholder="Find Contacts" style="font-family:'Source Sans Pro', sans-serif;">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="search_submit" style="font-family:'Source Sans Pro', sans-serif;">Search </button>
                            </div>
                        </div>
						
                    </form>

				<div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-1">
			
	<?php
	
	if(isset($_POST['search_submit']))
	{
		$search_variable = $_POST['search_submit_input'];
		$search_query = mysqli_query($con, "SELECT * FROM contact_info WHERE name LIKE '%".$search_variable."%' AND created_by = '$current_user' ORDER BY name");
		
		while($row = mysqli_fetch_array($search_query) )
		{
			$item_number = 0;
			
				if (!$row) 
				{
					printf("No Contacts %s\n", mysqli_error($con));
					exit();
				}
				
				//here we gooooo 
				echo"    <div class='panel panel-default'> ";
                echo"    <div class='panel-heading' role='tab' style='padding:15px 15px;'> ";
                echo"    <h4 class='panel-title'><a role='button' data-toggle='collapse' data-parent='#accordion-1' aria-expanded='false' href='#accordion-1 .item-<?php $item_number?>    '>" . $row['name'] . "</a>";
				
				echo"    <form name='button_form' action='' method='post'>";
				echo"    <input type='hidden' name='account_id' value=" .$row['c_id']. ">";
				echo"    <button class='btn btn-default' type='submit' name='submitapprove' style='float:right;margin:25px;padding:0px;font-family:'Source Sans Pro', sans-serif;'><i class='glyphicon glyphicon-minus' style='padding:3px;vertical-align:middle;'></i> </button></h4></div>";
                echo"    </form>";
				
				
				echo"    <div class='panel-collapse collapse in item-1' role='tabpanel'>";
                echo"    <div class='panel-body'><span><b>Phone:</b></br>" . $row['phone'] . "</br><b>Email:</b></br>" .$row['email'] .    "</br><b>Address:</b></br>".$row['address']." </span></div>";
                echo"    </div>";
                echo"    </div>";
				
				
					
					
				
		}
		
		if(isset($_POST['submitapprove']))
		{
			$delete_id = $_POST['account_id'];
			$delete_query = mysqli_query($con, "DELETE FROM contact_info WHERE c_id = '$delete_id'");
			
		}
		
	}
	
	else
	{
			$queri = mysqli_query($con, "SELECT * FROM contact_info WHERE created_by = '$current_user' ORDER BY name");
			
			$item_number = 0;
			while($row = mysqli_fetch_array($queri) )
			{
				$item_number = $item_number + 1;
				if (!$row) 
				{
					printf("Error: %s\n", mysqli_error($con));
					exit();
				}
				
				//here we gooooo 
				echo"    <div class='panel panel-default'> ";
                echo"    <div class='panel-heading' role='tab' style='padding:15px 15px;'> ";
                echo"    <h4 class='panel-title'><a role='button' data-toggle='collapse' data-parent='#accordion-1' aria-expanded='false' href='#accordion-1 .item-<?php $item_number?>    '>" . $row['name'] . "</a>";
				
				echo"    <form name='button_form' action='' method='post'>";
				echo"    <input type='hidden' name='account_id' value=" .$row['c_id']. ">";
				echo"    <button class='btn btn-default' type='submit' name='submitapprove' style='float:right;margin:30px;padding:0px;font-family:'Source Sans Pro', sans-serif;'><i class='glyphicon glyphicon-minus' style='padding:3px;vertical-align:middle;'></i> </button></h4></div>";
                echo"    </form>";
				
				
				echo"    <div class='panel-collapse collapse in item-1' role='tabpanel'>";
                echo"    <div class='panel-body'><span><b>Phone:</b></br>" . $row['phone'] . "</br><b>Email:</b></br>" .$row['email'] .    "</br><b>Address:</b></br>".$row['address']." </span></div>";
                echo"    </div>";
                echo"    </div>";
				
				
					
					
				
		}
		
		if(isset($_POST['submitapprove']))
		{
			$delete_id = $_POST['account_id'];
			$delete_query = mysqli_query($con, "DELETE FROM contact_info WHERE c_id = '$delete_id'");
			 echo "<meta http-equiv='refresh' content='0'>";
			
		}
					
					
				
			
	}
	?> 
			</div> 
					
                    
                
				
				
				</div>
            </div>
        </div>
    </div>
	<!--
    <footer class="site-footer" style="padding:0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Best Contact Manager © 2018</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
	-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
</body>

</html>