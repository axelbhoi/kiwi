<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:type" content="travel,adventure">
    <meta property="og:title" content="">
    <meta property="og:url" content= "">

    <link rel="Shortcut Icon" href="" type="image/x-icon">
    <link href="<?php echo base_url();?>css/dashboard/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/dashboard/login.css" rel="stylesheet">

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url();?>js/dashboard/jquery.js"></script>    
	<script src="<?php echo base_url();?>js/dashboard/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/dashboard/jquery.blockUI.js"></script>
	<script src="<?php echo base_url();?>js/dashboard/login.js"></script>

    <title></title>

</head>


<body>

    <div class="jumbotron vertical-center">
      
  		<div class="container text-center">
        
        	<div class="row">
				<div class="loginmodal-container">
					<img src = "<?php echo base_url();?>img/logo.png"/ class = "img-responsive">
					<br>
					<form>
						<input type="text" name="user" placeholder="Username" id = "username">
						<input type="password" name="pass" placeholder="Password" id = "pass">
						<input type="submit" name="login" class="login loginmodal-submit" value="Login" id = "sub-btn">
					</form>
					<!--	
					<div class="login-help">
						<a href="#">Register</a> - <a href="#">Forgot Password</a>
					</div>
					-->
				</div>
        	</div>
      	</div>

    </div>

    <script type = "text/javascript">
    	var base_url = "<?php echo base_url()?>";
    </script>

</body>


</html>