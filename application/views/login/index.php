<!DOCTYPE html>
<html>
<head>
	<!-- Tittle Logo -->
    <link rel="icon" type="img/svg" href="assets/img/tittle/shop.png">
    <title>POS KITA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- Css -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/style.css">    
<!-- Font awesome -->
<link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


<body>
	<img class="wave" src="<?php echo base_url() . 'assets/'; ?>img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url() . 'assets/'; ?>img/shop.svg">
		</div>
		<div class="login-content">
        <form action="<?php echo base_url(); ?>dashboard" enctype="multipart/form-data" method="POST">
				<img src="<?php echo base_url() . 'assets/'; ?>img/avatar.svg">
				<h4 class="head">SELAMAT DATANG DI APLIKASI</h4>
				<h2 class="title">POS-KITA</h2>
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
            	
            	<button type="submit" class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/'; ?>js/main.js"></script>
</body>
</html>
