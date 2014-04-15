<!DOCTYPE html >
<html >
  <head>
    <?php session_start() ?>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='behaviour.js' type='text/javascript'></script>
    <link rel="stylesheet" type="text/css" href="create_groups.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
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
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default-lg">
         <span class="glyphicon glyphicon-search"></span>Search</button>
      </form>


      <ul class="nav navbar-nav navbar-right" id="headLinks">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="friends.php">Friends</a></li>
        <li><a href="action.php?a=logout">Logout</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Log-out</a></li>
            <li><a href="#">Report Problem</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

    </nav>
	
	<div id="createG">
	
		<div id="heading">
			<h1>Select Group</h1>
		</div>
		
		<ol>
					<?php 
					$connect = mysql_connect('localhost','admin','admin123');
					$recipient_id; 
					if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
					
					$viewallgrps_qstring =  "SELECT group_name
										   FROM groups ";  // View All Groups query 
					$viewallgrps_query = mysql_query($viewallgrps_qstring,$connect);
					
					if(!$viewallgrps_query) 			//Verification of the query
					{
						die('Query Failure'.mysql_error($connect));
					}
					else
					{
						while($row = mysql_fetch_array($viewallgrps_query,MYSQL_ASSOC))
						{
							
								$_SESSION['group_name']= $row['group_name'];	
						
							foreach($row as $groupname)
							{
								echo"<li>".$groupname."</li>";
							}
								
						}
						
					}?>
					</ol>
		<form class="form-horizontal" role="form" id="group-form" action='action.php?a=choose_Group' method='post'>

				<div class="form-group" id="name">
					<label class="sr-only" for="group_name">Group Name</label>
					<h4>Group Name</h4>
					<div class="col-sm-11">
						<input type="text" class="form-control" id="group_name" placeholder="Group Name" name='group_name'>
					</div>
				</div>
					  
				<div id="entergrpbtn" >
					<input type='text' name ='a' hidden='true' value='enterGroup'><br /><!-- Ensures that the register control sequence is run-->
					<button type="submit" class="btn btn-primary btn-lg" \>Enter Group</button>
				</div>

		</form>
	</div>
	

 
 
	
	
	
	
	
	
	
	
	
     <div class="panel-footer">
		Copyright© Cary Nicole Shantel Jodi
	 </div>
	

  </body>
</html>