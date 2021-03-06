<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="TaskTracker - A web app to help you get things done">

<title>TaskTracker | Register</title>
<!-- Site favicon -->
<!-- link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' /-->
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="css/mouldifi-forms.css" rel="stylesheet">

<!-- App stylesheet -->
<link href="css/app.css" rel="stylesheet">
<!-- /App stylesheet -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body class="login-page">
<div class="login-container">
    <div class="login-branding">
        <a href="index.html"><h1>TaskTracker</h1></a>
    </div>
    <div class="login-content">
        <h2>Create an account</h2>
        <form method="post" action="signup">                         
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control">
            </div>                     
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group form-action">
                <button class="btn btn-primary btn-block">Register</button>
            </div>
            <p class="text-center">Have an account <a href="/">Sign in</a></p>                        
        </form>
    </div>
</div>
<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
