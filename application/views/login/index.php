<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/style.css">    

<body>
	<img class="wave" src="<?php echo base_url() . 'assets/'; ?>img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url() . 'assets/'; ?>img/bg.svg">
		</div>
		<div class="login-content">
        <form action="<?php echo base_url(); ?>dashboard/" enctype="multipart/form-data" method="POST">
				<img src="<?php echo base_url() . 'assets/'; ?>img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/'; ?>js/main.js"></script>
</body>
</html>
