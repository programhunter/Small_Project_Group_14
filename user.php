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
                    <li role="presentation"><a href="logout.php">Log Out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero" style="background-image:url(&quot;null&quot;);color:rgb(85,85,85);background-color:rgb(255,204,0);">
        <h3 class="text-center" style="color:#ffffff;text-shadow:2px 2px 2px rgba(0,0,0,.2);">Heading</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-addon"><span><i class="glyphicon glyphicon-search"></i></span></div>
                            <input class="form-control" type="text" placeholder="Find Contacts" style="font-family:'Source Sans Pro', sans-serif;">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="button" style="font-family:'Source Sans Pro', sans-serif;">Search </button>
                            </div>
                        </div>
                    </form>
                    <div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-1">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" style="padding:15px 15px;">
                                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="true" href="#accordion-1 .item-1">Accordion Item</a><button class="btn btn-default" type="button" style="float:right;margin:0px;padding:0px;font-family:'Source Sans Pro', sans-serif;"><i class="glyphicon glyphicon-minus" style="padding:3px;vertical-align:middle;"></i> </button></h4></div>
                            <div class="panel-collapse collapse in item-1" role="tabpanel">
                                <div class="panel-body"><span>Item body.</span></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-2">Accordion Item</a></h4></div>
                            <div class="panel-collapse collapse item-2" role="tabpanel">
                                <div class="panel-body"><span>Item body.</span></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-3">Accordion Item</a></h4></div>
                            <div class="panel-collapse collapse item-3" role="tabpanel">
                                <div class="panel-body"><span>Item body.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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