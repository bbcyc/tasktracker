<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TaskTracker | Login</title>

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
        <h1>TaskTracker</h1>
    </div>
    <div class="login-content">
        <h2><strong>Welcome</strong>, please login</h2>
        <form method="post" action="login">                        
            <div class="form-group">
                <input type="text" name="email" placeholder="Email Address" class="form-control">
            </div>                        
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                 <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="remeber">
                    <label for="remeber">Remember me</label>
                  </div>
             </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Login</button>
            </div>
            <p class="text-center"><a href="forgot-password.html">Forgot your password?</a></p>                        
        </form>
    </div>
</div>
<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
