
<?php
include('header2.html');
?>
<head

    
        <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
        <script src='behaviour.js' type='text/javascript'></script>
        <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>
         <!--<script src='behaviour.js' type='text/javascript'></script>-->
        <link rel="stylesheet" type="text/css" href="header2.css">
        <link rel="stylesheet" type="text/css" href="create_groups.css">
		<link rel="stylesheet" type="text/css" href="enter-group.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">


  </head>
 
  <body id='body'>

		<div id = "container">
  		<div class="row">
          <div class="col-md-4">
              <img src="/DB/images/tablet.jpg" id="image">

            <div id="taskbar">
              <li>
                <a href="homepage.php"><span class="glyphicon glyphicon-list-alt col-md-2"></span>News Feed</h4></a>
              </li>

              <li>
                <a href="groups.php"><span class="glyphicon glyphicon-th-large col-md-2"></span>Groups</a>
              </li>

              <li>
                <a href="friends.php"><span class="glyphicon glyphicon-user col-md-2"></span>Friends</a>

              </li>
            </div>
          
          </div>


      <div class="col-md-6">

        <div id="heading">
					<h1>Join Group</h1>
				</div>
		
				<form class="form-horizontal" role="form" id="group-form" action='action.php?a=joinGroup' method='post'>

					<div class="form-group" id="name">
						<label class="sr-only" for="group_name">Group Name</label>
						<h4>Group Name</h4>
						<div class="col-sm-11">
							<input type="text" class="form-control" id="group_name" placeholder="Group Name" name='group_name'>
						</div>
					</div>
						  
					

					<div id="entergrpbtn" >
						<input type='text' name ='a' hidden='true' value='joinGroup'><br /><!-- Ensures that the register control sequence is run-->
						<button type="submit" class="btn btn-primary btn-lg" \>Join Group</button>
					</div>

				</form>
			</div>

		</div>

	
	
	
     <div class="panel-footer">
		Copyright© Cary Nicole Shantel Jodi
	 </div>
	

  </body>
</html>