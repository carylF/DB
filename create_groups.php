
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


      <div class="col-md-8">

        <div id="heading">
					<h1>Create Group</h1>
				</div>
		
				<form class="form-horizontal" role="form" id="group-form" action='action.php?a=createGroup' method='post'>

					<div class="form-group" id="name">
						<label class="sr-only" for="group_name">Group Name</label>
						<h4>Group Name</h4>
						<div class="col-sm-11">
							<input type="text" class="form-control" id="group_name" placeholder="Group Name" name='group_name'>
						</div>
					</div>
						  
					<div  class="input-group" id="type" >
						<label class="sr-only" for="group_type">Group Type</label>  
						<h4>Group Type</h4>
						<div class="col-sm-11" id="type_choice">
							<input type="radio" name="group_type" value="Entertainment">Entertainment<br>
							<input type="radio" name="group_type" value="Society">Society<br>
							<input type="radio" name="group_type" value="Academic">Academic<br>
							<input type="radio" name="group_type" value="Instructional">Instructional<br>
						</div>
					</div>

					<div class="form-group" id="descr">
						<label class="sr-only" for="group_description">Description</label>
						<h4>Description</h4>
						<p>Must be no more than 50 characters long.</p>
						<div class="col-sm-12" id="text_area">
							
							<textarea rows="4" cols="50" id="group_name" maxlength="50" form="group-form" placeholder="Description" name='group_description'></textarea>
							
						</div>
					</div>

					<div id="creategrpbtn" >
						<input type='text' name ='a' hidden='true' value='createGroup'><br /><!-- Ensures that the register control sequence is run-->
						<button type="submit" class="btn btn-primary btn-lg" \>Create Group</button>
					</div>

				</form>
			</div>

		</div>

	
	
	
     <div class="panel-footer">
		Copyright© Cary Nicole Shantel Jodi
	 </div>
	

  </body>
</html>