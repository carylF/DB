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


     <div id = "container">

        <div id ="uinfo">
            <img src="DB/images/tablet">
	 		<?php
				$connect = mysql_connect('localhost','admin','admin123');
				$recipient_id; 
				if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
				else
				{
					$result = $_SESSION['USERS'];
					if($rows=mysql_fetch_array($result))
					{
						echo "First Name:, {$rows['fname']} <br>".
							"Last Name: {$rows['lname']} <br> ".
							"Email: {$rows['email']} <br> ";
					}
				}
			?> 
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