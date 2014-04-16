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

        <div class="row">
          <div class="col-md-4">
            <div id ="uinfo">
              <img src="/DB/images/tablet.jpg">
            </div>

            <div id="taskbar">
              <li>
                <h4><span class="glyphicon glyphicon-list-alt col-md-2"></span>News Feed</h4>
              </li>

              <li>
                <a href="groups.php"><span class="glyphicon glyphicon-th-large col-md-2"></span>Groups</a>
              </li>

              <li>
                <h4><span class="glyphicon glyphicon-user col-md-2"></span>Friends</h4>

              </li>
            </div>
          
          </div>


          <div class="col-md-8">

			<div id="heading">
				<h1>Your Groups</h1>
			</div>
			
			<div >
				<p> The groups you have created are listed below:</p>

					<ol>
					<?php 
					$connect = mysql_connect('localhost','admin','admin123');
					$recipient_id; 
					if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
					
					$viewgrps_qstring =  "SELECT group_name
										   FROM groups 
										   WHERE group_owner = '$_SESSION[userid]' ";  // View Groups query 
					$viewgrps_query = mysql_query($viewgrps_qstring,$connect);
					
					if(!$viewgrps_query) 			//Verification of the query
					{
						die('Query Failure'.mysql_error($connect));
					}
					else
					{
						while($row = mysql_fetch_array($viewgrps_query,MYSQL_ASSOC))
						{
							
								$_SESSION['group_name']= $row['group_name'];	
						
							foreach($row as $groupname)
							{
								echo"<li>".$groupname."</li>";
							}
								
						}
						
					}?>
					</ol>
				
				
			
          </div>

        </div>


     </div>



	
	
     <div class="panel-footer">
		Copyright© Cary Nicole Shantel Jodi
	 </div>
	

  </body>
</html>