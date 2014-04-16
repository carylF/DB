<?php
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
<?php
	mysql_connect("localhost", "root", "")or die("Cannot connect server"); 
	mysql_select_db("dbtest")or die("Cannot select the desired database");

	$Message = $_POST["text_body"];


	$sql= "INSERT INTO post(text_body)VALUES('$Message')";
	if($result=mysql_query($sql))
	{
		echo "post added, click to go back to home page";
		?>
		<form id="goback" action="homepage.php" method="post">
		<p> </p>
		<input type="submit" name="Completed info" id="Completed_info" value="Go Back"/>
		</form>
		<?php
	}
	else
	{
		echo "Could not add your post";
	}
	mysql_close();
?>