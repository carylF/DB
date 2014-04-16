<?php
//

$page_title = 'Registration Page';
include('header2.html');
?>
  <head>
    <?php session_start() ?>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <!-- Imported local files -->
    <link rel="stylesheet" type="text/css" href="profile.css" />
    <link rel="stylesheet" type="text/css" href="header2.css">
    <link rel="stylesheet" type="text/css" href="create_groups.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
 
 
  <body id='body'>

    <div id="container">
      <div id="banner">
       <!--  <img src="/DB/images/banner.jpg" > -->

        <div id="profpic">
          <img src="/DB/images/default.jpg">
            <li><a href="add_image.html"> Change profile picture</a></li>
        </div>

        <div id="tabs">
        <ul class="nav nav-tabs">
          <li ><a href="profile.php">Timeline</a></li>
          <li ><a href="#">About</a></li>
          <li><a href="friends.php">Friends</a></li>
          <li class="active"><a href="editpro.php">Edit</a></li>
        </ul>
      </div>

      </div>

      

      

    </div>

    
	 <?php
		mysql_connect("localhost", "admin", "admin123")or die("cannot connect server "); 
		mysql_select_db("mybook")or die("Cannot select desired database");
		$sql="SELECT username, fname, lname, email, dob, profile_pic from profile";
		
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
		 <form id="group-form" action="updatechanges.php" method="post"> 
		 <p>
				<?php echo "{$rows['username']} <br>";?>Username
				<input type="text" name="username" id="username" placeholder ="Enter new username" /></br>
				
                <?php echo "{$rows['fname']} <br>";?>First Name
				<input type="text" name="fname" id="fname" placeholder ="Enter First name" /></br>
				
                 <?php echo "{$rows['lname']}<br>";?>Last Name
				 <input type="text" name="lname" id="lname" placeholder ="Enter Last name" /></br>
				 
				 <?php echo "{$rows['email']} <br>";?>Email
				 <input type="text" name="email" id="email" placeholder ="Enter email address" /></br>
				 
				  <?php echo "{$rows['dob']} <br>";?>Date of Birth
				  <input type="text" name="dob" id="dob" placeholder ="Enter Date of Birth" /></br>	
				  
					<br> </br>

				<input type="submit" name="Completed info" id="Completed_info" value="Save Changes"/>
		</p>
         </form>
		 
		<?php
		 }
		 mysql_close();
		 ?>