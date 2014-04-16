<?php



include('header2.html');
?>
  <head>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>
     <script src='behaviour.js' type='text/javascript'></script>


    <link rel="stylesheet" type="text/css" href="header2.css" />
    <link rel="stylesheet" type="text/css" href="homepage.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

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
			<div class="col-md-6">

						<div id="heading">
							<h1>Your Friends</h1>
						</div>
						
						<div >
							<p> You friends are listed below:</p>

								<ol>
								<?php 
								session_start();
								$connect = mysql_connect('localhost','admin','admin123');
								$recipient_id; 
								if(!mysql_select_db('mybook'))
								{
									die('Failure selecting Database'. mysql_error());
								}
								$userid = $_SESSION['userid'];
								$viewfrd_qstring =  "CALL GetFriends($userid)"; // View Groups query 
								$viewfrd_query = mysql_query($viewfrd_qstring,$connect);
								
								if(!$viewfrd_query) 			//Verification of the query
								{
									die('Query Failure'.mysql_error($connect));
								}
								else
								{
									while($row = mysql_fetch_array($viewfrd_query,MYSQL_ASSOC))
									{	
										
										echo"<li>".$row['fname']." ".$row['lname']."</li>";
											
									}
									
								}?>
								</ol>
							
							
						
						</div>

			 </div>


  <div id="footer">
     Copyright © Cary Nicole Shantel Jodi
   </div>
  </body>
</html>