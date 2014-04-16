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

					$viewallgrps_qstring =  "SELECT group_name,groupId
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
								$_SESSION['group_ID'] = $row['groupId'];

								echo"<li>".$row['group_name']."</li>";

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