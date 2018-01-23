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
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Best Contact Manager</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="index.php">Home </a></li>
                    <li role="presentation"><a href="login.php">Log In </a></li>
                    <li role="presentation"><a href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero" style="background-image:url(&quot;null&quot;);color:rgb(85,85,85);background-color:rgb(255,204,0);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup"><img src="assets/img/contacts.png" class="device" style="padding:100px 40px;"></div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1 class="text-center" style="font-size:60px;">Contact Manager</h1>
                    <p class="text-center">A personal contact manager to keep in touch with those closest to you.</p>
                    <p class="text-center"><a class="btn btn-primary btn-lg" role="button" href="login.php" style="font-size:20px;"><i class="fa fa-lock"></i> LOGIN</a><a class="btn btn-success btn-lg" role="button" href="register.php" style="font-size:20px;"><i class="fa fa-pencil"></i> Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">People Love It!</h2>
        <blockquote>
            <p>"I used to memorize all my contacts before this groundbreaking technology allowed me to store them online!" </p>
            <footer>Bill Gates</footer>
        </blockquote>
    </section>
    <section class="features" style="background-color:rgb(255,204,0);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Fantastic Features</h2>
                    <p class="text-center" style="font-size:16px;">WOW. Look at all these features that I can use. </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-user"></i>
                            <p>Multiple Contacts</p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-search"></i>
                            <p>Search Function</p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-minus-sign"></i>
                            <p>Delete Function</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Some Fancy App © 2018</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>