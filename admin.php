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

     <div id = 'ulist'>

        
		<h1 align="center">Administrator's Page</h1>
		<h3>MyBook Users</h3>
		<p> </p>
		
		<?php
		$connect = mysql_connect('localhost','admin','admin123');
		$recipient_id; 
		if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
          $sql = "SELECT userId, fname, lname FROM users";
          $_SESSION['USERS'] = mysql_query($sql);
        ?>	
		
		<table align="center" font="verandana,arial,san-serif" size="11px" color="#E0E0E0" width="1px" border="collapse">
          <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last name</th>
          </tr>
		  
		 <?php
			$result=$_SESSION['USERS'];
			while($rows=mysql_fetch_array($result))
			{
		?>
		  <tr>
                  <td><?php echo "{$rows['fname']}"?></td>
                  <td><?php echo "{$rows['lname']}"?></td>
                  <td><a href="friend.php">Show Friends</a></td>
              </tr>  
		 <?php
		 }
		 ?>
		 </table>
     </div>