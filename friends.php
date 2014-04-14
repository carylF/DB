<!DOCTYPE html >
<html >
  <head>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='behaviour.js' type='text/javascript'></script>
    <link rel="stylesheet" type="text/css" href="homepage.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
 
  <body id='body'>

    <nav class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
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

    
      <form class="navbar-form navbar-left" role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default-lg">
         <span class="glyphicon glyphicon-search"></span>Serach</button>
      </form>


      <ul class="nav navbar-nav navbar-right" id="headLinks">
        <li><a href="#">Profile</a></li>
        <?php echo <li><a href='homepage.php'>Home</a></li>?>
        <?php echo <li><a href='friends.php'>Friends</a></li>?> 
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

     </nav>
     <div id = "container">

        <div id ="uinfo">
            <img src="DB/images/tablet">
	<!-- 		<?php
				mysql_connect("localhost", "root", "")or die("cannot connect server "); 
				mysql_select_db("dbtest")or die("Cannot select desired database");
				$sql="SELECT * FROM users";
				$result=mysql_query($sql);
				if(! $result)
				{
					die('Could not get data: ' . mysql_error());
				}
				else
				{
					$rows=mysql_fetch_array($result));
					echo "First Name:, {$rows['fname']} <br>".
					"Last Name: {$rows['lname']} <br> ".
					"Email: {$rows['email']} <br> ";
				}
			?> -->
			<a href="Profile.php">
			<div id="footer">

      Copyright © Cary Nicole Shantel Jodi
    </div>
       </div>
	   
       <div id = "pinfo">
	   <?php
			$sql="SELECT fname, lname FROM friend_of JOIN users
				  ON friend_of.friend_owner = profile.userId
				  WHERE friend_of.friend = users.userId";
				$result=mysql_query($sql);
				if(! $result)
				{
					die('Could not get data: ' . mysql_error());
				}
				else
				{
					while ($rows=mysql_fetch_array($result));
					{
						echo "{$rows['fname']} < br>".
						"{$rows['fname']} <br>";
					}
				}
				mysql_close();
		?>

       </div>
     </div>
	</body>
</html>