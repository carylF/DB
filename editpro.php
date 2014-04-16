<?php
//


include('header2.html');
?>
  <head>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='behaviour.js' type='text/javascript'></script>
     <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>

    <link rel="stylesheet" type="text/css" href="header2.css" />
    <link rel="stylesheet" type="text/css" href="homepage.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
  <body id='body'>

    
	 <?php
		mysql_connect("localhost", "root", "")or die("cannot connect server "); 
		mysql_select_db("dbtest")or die("Cannot select desired database");
		$sql="SELECT username, fname, lname, email, dob, profilepic from profile";
		
		$result=mysql_query($sql);
		$rows=mysql_fetch_array($result);

		if(! $result)
		{
			die('Could not get data: ' . mysql_error());
		}	
		else
		{
		?>
		<br> </br>
		<br> </br>
		<br> </br>
		<br> </br>
		 <form id="edit" action="updatechanges.php" method="post"> 
		 <p>
				<?php echo "{$rows['username']} <br>";?>
				<input type="text" name="username" id="username" placeholder ="Enter new username" /></br>
				
                <?php echo "{$rows['fname']} <br>";?>
				<input type="text" name="fname" id="fname" placeholder ="Enter First name" /></br>
				
                 <?php echo "{$rows['lname']}<br>";?>
				 <input type="text" name="lname" id="lname" placeholder ="Enter Last name" /></br>
				 
				 <?php echo "{$rows['email']} <br>";?>
				 <input type="text" name="email" id="email" placeholder ="Enter email address" /></br>
				 
				  <?php echo "{$rows['dob']} <br>";?>
				  <input type="text" name="dob" id="dob" placeholder ="Enter Date of Birth" /></br>	
				  
					<br> </br>

				<input type="submit" name="Completed info" id="Completed_info" value="Save Changes"/>
		</p>
         </form>
		 
		<?php
		 }
		 mysql_close();
		 ?>