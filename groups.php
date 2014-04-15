
<?php
//

$page_title = 'Registration Page';
include('header2.html');
?>
<head
<!--<?php session_start() ?> -->
    <title> || <?php echo $_SESSION['Name'] ;?></title>
        <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
        <script src='behaviour.js' type='text/javascript'></script>
        <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>
        <script src='suggestions.js' type="text/javascript"></script>
         <!--<script src='behaviour.js' type='text/javascript'></script>-->
        <link rel="stylesheet" type="text/css" href="header2.css">
        <link rel="stylesheet" type="text/css" href="homepage.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">

    </head>
 
  <body id='body'>

    <div id = "container">

        <div class="row">
          <div class="col-md-4">
            <div id ="uinfo">
              <img src="/DB/images/tablet.jpg">
            </div>

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


          <div class="col-md-8">

            <div>
              <h2>Create a group</h2>
              <p>
               <a href="create_groups.php"> <button type="submit" class="btn btn-primary btn-lg" > Create a Group</button></a>
              </p>
            </div>

            <div>
              <h2>View groups</h2>
              <p>
              <a href="view_groups.php"> <button type="submit" class="btn btn-primary btn-lg" > View Groups</button></a>
              </p>
            </div>
			
			<div>
              <h2>Enter a Group</h2>
              <p>
              <a href="enter-group.php"> <button type="submit" class="btn btn-primary btn-lg" > Enter Group</button></a>
              </p>
            </div>
			
          </div>

        </div>


     </div>



	
	
     <div class="panel-footer">
		Copyright© Cary Nicole Shantel Jodi
	 </div>
	

  </body>
</html>