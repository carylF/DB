<!DOCTYPE html >
<html >
	<head>
		<!--<?php session_start() ?> -->
		<title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
		<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
		 <!--<script src='behaviour.js' type='text/javascript'></script>-->
 		<link rel="stylesheet" type="text/css" href="myBook.css" />

 		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
		<script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

	</head>
 
	<body id='body'>

		<nav class="nav navbar-static-top" role="navigation" id="nav">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">MyBook</a>
		    </div>


				<form class="form-inline" role="form" id='login-form' action='action.php?a=login' method='POST'>
				  <div class="form-group" id="logemail">
				    <label class="sr-only" for="exampleInputEmail2">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name ='email'>
				  </div>

				  <div class="form-group" id="logpass">
				    <label class="sr-only" for="exampleInputPassword2">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name ='pword'>
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
		  		<input type='text' name ='a' hidden='true' value='register'><br /><!-- Ensures that the register control sequence is run-->
				  <button type="submit" class="btn btn-default" id="login">Login in</button>
				</form>

		   
		</nav>

		<div id="signup">

			<div id="heading">
				<h1>Sign Up</h1>
				<h5> It's free! No hidden charges</h5>
			</div>

			<form class="form-horizontal" role="form" id="signup-form" action='action.php?a=register' method='post'>

				 <div class="form-group" id="name">
						<label class="sr-only" for="fname">First Name</label>
				    <div class="col-sm-11">
				    	<input type="text" class="form-control" id="fname" placeholder="First Name" name='fname'>
				    </div>
				  </div>

			  <div class="form-group" id="name">
			  	<label class="sr-only" for="lname">Last Name</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="lname" placeholder="Last Name" name='lname'>
			    </div>
			  </div>


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

<!-- 				<div id="birthdayHead">
				<h3>Birthday</h3>
			

				Split button 
					<div id="dob">
						<div class="btn-group">
						  <button type="button" class="btn btn-default">Day</button>
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#">Action</a></li>
						    <li><a href="#">Another action</a></li>
						    <li><a href="#">Something else here</a></li>
						    <li><a href="#">Separated link</a></li>
						  </ul>
						</div>

						<div class="btn-group">
						  <button type="button" class="btn btn-default">Month</button>
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#">Action</a></li>
						    <li><a href="#">Another action</a></li>
						    <li><a href="#">Something else here</a></li>
						    <li><a href="#">Separated link</a></li>
						  </ul>
						</div>
					</div>



					<div class="btn-group">
					  <button type="button" class="btn btn-default">Year</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li>Action</li>
					    <li>Another action</li>
					    <li>Something else here</li>
					    <li>Separated link</li>
					  </ul>
					</div> 

				</div>-->

			<div id="signupbtn" >
			<input type='text' name ='a' hidden='true' value='register'><br /><!-- Ensures that the register control sequence is run-->
		  	<button type="submit" class="btn btn-primary btn-lg" \>Sign Up</button>
		  </div>

			</div>
		  
		  

			</form>

		</div>



		<div id="footer">
			Copyright © Cary Nicole Shantel Jodi
		</div>

	</body>
</html>
