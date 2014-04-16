<?php
include('header2.html');
?>
  <head>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>

    <link rel="stylesheet" type="text/css" href="header2.css" />
    <link rel="stylesheet" type="text/css" href="homepage.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
 
	<body id='body'>

		<div id="signup">

			<div id="heading">
				<h1>Sign In</h1>

			</div>

			<form class="form-horizontal" role="form" id="signup-form" action='action.php?a=login' method='post'>

				 
			  <div class="form-group">
				  <label class="sr-only" for="exampleInputEmail2">Email address</label>
				  <div class="col-sm-12">
				  	<input type="email" class="form-control" id="email" placeholder="Enter email" name='email'>
				  </div>
				</div>


				<div class="form-group">
				  <label class="sr-only" for="exampleInputPassword2">Password</label>
				  <div class="col-sm-12">
				  	<input type="password" class="form-control" id="pass" placeholder="Password" name= 'pword'>
				  </div>
			  </div>
				
				<div class="form-group" id="box">
		    <div class="col-sm-offset-2 col-sm-6">
		      <div class="checkbox">
		        <label id="login">
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>

			<div id="signupbtn" >
			<input type='text' name ='a' hidden='true' value='register'><br /><!-- Ensures that the register control sequence is run-->
		  	<button type="submit" class="btn btn-primary btn-lg" \>Sign in</button>
		  </div>

			</div>
		  
		  

			</form>

		</div>



		<div id="footer">
			Copyright © Cary Nicole Shantel Jodi
		</div>

	</body>
</html>
