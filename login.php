<?php include("processunsecure.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <title>LOGIN</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/google-map.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
		<body style = "padding-top: 50px; padding-bottom: 150px;">
			<div class = "container">
				<div class = "row">
					<div class="panel panel-default col-md-6 col-md-offset-3">
			 		 <div class="panel-body">
					<h1 class = "text-center">Register</h1>
					<a href="../index.html"><img src="images/registerlogo.png" style="margin-left:25%;" title="AFC logo" alt="afc logo"></a>
					<form method="post" action="">
						<span style = "color:red"><?php echo $login_notice; ?></span>
						<!-- User enters username -->
						<div class="form-group">
					    <label for="phone">Phone Number<span style = "color:red">
								<?php echo $phone_err; ?></span></label>
					    <input type="text" class="form-control" name="phone" id="phone"
							maxlength="20" value="<?php echo $phone; ?>" placeholder="Phone Number" autofocus>
					  </div>
						<!-- User enters password -->
						<div class="form-group">
					    <label for="passwd">Password<span style = "color:red">
								<?php echo $password_err; ?></span></label>
					    <input type="password" class="form-control" name="passwd" id="passwd"
							value="<?php echo $password; ?>" placeholder="Password">
					  </div>
						<!-- Login Button -->
						<div class="form-group text-center">
							<button type="submit" name="login" class="btn btn-primary">Login</button>
						</div>
						</br>
						<p class="text-center">Don't Have An Account? <a href="register.php">Register</a></p>
						<div>
						<p class="text-center"><a href="forgotpass.php">Forgot password</a></p>
						</div>
					</form>
			  </div>
			</div>
		</div>
	</div>

	<!--Footer-->
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<p></p>
			<p class="text-center" style = "color: #fff">Time is a-running</p>
		</div>
	</nav>

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/processunsecure.js"></script>
</body>
</html>
