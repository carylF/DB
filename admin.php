<!DOCTYPE html >
<html >
  <head>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='behaviour.js' type='text/javascript'></script>
     <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>
     <script src='suggestions.js' type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="homepage.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="C:\xampp\htdocs\DB\bootstrap-3.1.1-dist\css\bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

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
          <input type="text" class="form-control" placeholder="Search" onkeyup="showHint(this.value)"s>
        </div>
        <button type="submit" class="btn btn-default-lg">
         <span class="glyphicon glyphicon-search"></span>Search</button>
      </form>


      <ul class="nav navbar-nav navbar-right" id="headLinks">
           <li><a href="action.php?a=logout">Logout</a></li>

        
      </ul>
       </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

     </nav>
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