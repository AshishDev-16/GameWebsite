<html>
    <head >
        <meta charset = " UTF - 8 " >
        <meta name = " viewport " content = " width = device - width , initial - scale = 1.0 " >
        <title > Gaming Website </title >
        <link rel = " stylesheet " href = "new.css" >
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!--favicon icon-->
        <link rel="Shortcut Icon" type="image/png" href="favicon2.png">
        

    </head >
    <body>

	<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<header >
		<a href="index.php" class="logo">Helheim Gaming</a>
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="#games">Games</a></li>
			<li><a href="#mobile games">Mobile Games</a></li>
			<li><a href="index.php">Contact</a></li>
		</ul>
	</header>

	<div class="body">
		<div class="veen">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
			
			<div class="wrapper">
				<form action="login.php" method="post" id="login" tabindex="500">
					<h3>Login</h3>
					<div class="mail">
						<label>Username</label>
						<input type="username" required class="form-control" id="username" name="username">
					</div>
					<div class="passwd">
						<label>Password</label>
						<input type="password" required class="form-control" id="password" name="password">
					</div>
					<div class="submit">
						<!--<button class="dark">Login</button>-->
						<input type="submit" name="Login" value="Login">
					</div>
				</form>

				<form action="Register.php" method="post" id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<label>Full Name</label>
						<input type="text" required class="form-control" id="Fullname" name="Fullname">
					</div>
					<div class="mail">
						<label>Mail</label>
						<input type="email" required class="form-control" id="mail" name="mail">
					</div>
					<div class="uid">
						<label>UserName</label>
						<input type="text" required class="form-control" id="username" name="username">
					</div>
					<div class="passwd">
						<label>Password</label>
						<input type="password" required  class="form-control" id="password" name="password">
					</div>
					<div class="submit">
						<!--<button class="dark">Register</button></a>-->
						<input type="submit" name="Register" value="Register">
					</div>
			</div>
		</div>
	</div>
</form>		


	<style type="text/css">
		.site-link{
      padding: 5px 15px;
			position: fixed;
			z-index: 99999;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 10px;
		}
		.site-link img{
			width: 30px;
			height: 30px;
		}
	
	</style>

    <script>
        $(document).ready(function(){
			$(".veen .rgstr-btn button").click(function(){
				$('.veen .wrapper').addClass('move');
				$('.body').css('background',"url('god1.jpg')");
				$(".veen .login-btn button").removeClass('active');
				$(this).addClass('active');

			});
			$(".veen .login-btn button").click(function(){
				$('.veen .wrapper').removeClass('move');
				$('.body').css('background',"url('spidy.jpg')");
				$(".veen .rgstr-btn button").removeClass('active');
				$(this).addClass('active');
			});
		});



    </script>
    </body>
</html>

