<?php
session_start();
header('Access-Control-Allow-Origin:*');
$connect = mysql_connect('localhost','admin','admin123');
$recipient_id; 
if(!mysql_select_db('mybook'))
{
	die('Failure selecting Database'. mysql_error());
}




 if($_GET['a'] == 'login')
{
	$cred_verify_qstring =  "SELECT * 
			         	   FROM users 
			         	   WHERE email = '$_POST[email]' AND pword ='$_POST[pword]'";  // Login query 
	$cred_verify_query = mysql_query($cred_verify_qstring,$connect);
	if(!$cred_verify_query) 			//Verification of the query
	{
		die('Query Failure'.mysql_error($connect));
	}
	else
	{
		if($row =mysql_fetch_array($cred_verify_query,MYSQL_ASSOC))
		{
			while($row)
			{
				if(($_POST['email'] == $row['email']) && ($_POST['pword'] == $row['pword']))
				{

					$_SESSION['email'] = $row['email'];
					$_SESSION['pword'] = $row['pword'];
					
					echo ('Login Successful');
					echo('<script>location.replace("homepage.php")</script>');
				}
			}
		}
		else
		{
			echo "<script>alert('Incorrect email address or password');
					location.replace('myBook.php');</script>";
		}
	}
}
else if ($_GET['a'] == 'register')
{
	$insert_qstring = "INSERT INTO users 
			(
				fname,
				lname,
				email,
				pword
			) 
			VALUES
			(
				'$_POST[fname]',
				'$_POST[lname]',
				'$_POST[email]',
				'$_POST[pword]')";


	$signup_query = mysql_query($insert_qstring, $connect);


	if(!$signup_query)
	{
		die('Query error'.mysql_error($connect));
	}
	else
	{
		echo"<script>alert('Registration complete')</script>";
		echo "<script>location.replace('homepage.php')</script>";
	}
}

else if($_GET['a']=='logout')
{
	echo '<script>alert("Logging you out '.$_SESSION['Name'].'")</script>';
	session_destroy();
	echo '<script>location.replace("myBook.php");</script>';
}

else if ($_GET['a'] == 'createGroup')
{
	$insert_qstring = "INSERT INTO groups 
			(
				group_name,
				group_type,
				group_description,
			) 
			VALUES
			(
				'$_POST[group_name]',
				'$_POST[group_type]',
				'$_POST[group_description]')";


	$groups_query = mysql_query($insert_qstring, $connect);


	if(!$groups_query)
	{
		die('Query error'.mysql_error($connect));
	}

	else
	{
		echo"<script>alert('Group creation complete')</script>";
		echo "<script>location.replace('groups.php')</script>";
	}
}

else if(!isset($_GET['a']))
{
	echo '<script>alert("Error occured \nReturning you to the home page")</script>';
	echo '<script>location.replace("myBook.php")</script>';
}

?>
