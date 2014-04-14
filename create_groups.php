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
        <li><a href="#">Profile</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Friends</a></li>
        <li><a href="#">Link</a></li>
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
			<h1>Create Group</h1>
		</div>
		
		<form class="form-horizontal" role="form" id="group-form" action='action.php?a=register' method='post'>

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
						
						<textarea rows="4" cols="50" name="comment" maxlength="50" form="group-form"placeholder="Description"name='group_description'></textarea>
						
					</div>
				</div>

				<div id="creategrpbtn" >
					<input type='text' name ='a' hidden='true' value='register'><br /><!-- Ensures that the register control sequence is run-->
					<button type="submit" class="btn btn-primary btn-lg" \>Create Group</button>
				</div>

		</form>
	</div>
	

 
 
	
	
	
	
	
	
	
	
	
     <div class="panel-footer">
		Copyright© Cary Nicole Shantel Jodi
	 </div>
	

  </body>
</html>