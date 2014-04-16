<?php
session_start();
header('Access-Control-Allow-Origin:*');
$connect = mysql_connect('localhost','admin','admin123');


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
	
	$cred_userid_qstring = "SELECT userId
							FROM users
							WHERE email = '$_POST[email]' AND pword ='$_POST[pword]'"; //Query to retrieve userId

	$cred_userid_query = mysql_query($cred_userid_qstring,$connect);

			
	if(!$cred_verify_query) 			//Verification of the query
	{
		die('Query Failure'.mysql_error($connect));
	}
	else
	{
		if($row =mysql_fetch_array($cred_verify_query,MYSQL_ASSOC))
		{
				if(($_POST['email'] == $row['email']) && ($_POST['pword'] == $row['pword']))
				{
					$_SESSION['userid']= $row['userId'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['pword'] = $row['pword'];
					
					echo ('Login Successful');
					echo('<script>location.replace("homepage.php")</script>');
					
				}
		}
		else
		{
			echo "<script>alert('Incorrect email address or password');
					location.replace('register.php');</script>";
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
				pword,
				dob
			) 
			VALUES
			(
				'$_POST[fname]',
				'$_POST[lname]',
				'$_POST[email]',
				'$_POST[pword]',
				'$_POST[dob]')";

	$signup_query = mysql_query($insert_qstring, $connect);

	if(!$signup_query)
	{
		die('Query error'.mysql_error($connect));
	}

	else
	{
		echo"<script>alert('Registration complete')</script>";
		echo "<script>location.replace('sign-in.php')</script>";
	}
}

else if($_GET['a']=='logout')
{
	echo '<script>alert("Logging you out '.$_SESSION['userId'].'")</script>';
	session_destroy();
	echo '<script>location.replace("register.php");</script>';
}

else if ($_GET['a'] == 'createGroup')
{
	$insert_qstring = "INSERT INTO groups 
			(
				group_name,
				group_type,
				group_description,
				group_owner
			) 
			VALUES
			(
				'$_POST[group_name]',
				'$_POST[group_type]',
				'$_POST[group_description]',
				'$_SESSION[userid]'
			)";
	
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

else if ($_Get['a'] =='grpview')
{

	$viewgrps_qstring =  "SELECT * 
			         	   FROM groups 
			         	   WHERE group_owner = '$_SESSION[userid]' ";  // View Groups query 
	$viewgrps_query = mysql_query($viewgrps_qstring,$connect);
	
	if(!$viewgrps_query) 			//Verification of the query
	{
		die('Query Failure'.mysql_error($connect));
	}
	else
	{
		if($row =mysql_fetch_array($viewgrps_query,MYSQL_ASSOC))
		{
				if($_SESSION['userid'] == $row['group_owner'])
				{
					$_SESSION['group_name']= $row['group_name'];
					$_SESSION['group_type'] = $row['group_type'];
					$_SESSION['group_desc'] = $row['group_description'];
					
					echo($_SESSION['group_name']);
					echo($_SESSION['group_type']);
					echo($_SESSION['group_desc']);
					//echo('<script>location.replace("view_groups.php")</script>');
					
				}
		}
		else
		{
			echo "<script>alert('No Groups');</script>";
		}
	}
}
else if($_GET['a']=='choose_group')
{
	
}

else if ($_GET['a']=='addphoto')
 {

	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);


	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 20000)
	&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
	else
  {
  echo "Invalid file";
  }

}
// else if($_GET['a']=='enterGroup')
// {
// 	$checkingrp_qstring = "SELECT date_added
// 						   FROM groups JOIN add_to_group 
// 						   ON groups.groupId=add_to_group.groupId
// 						   WHERE $_POST[group_name]=add_to_group.group_name AND $_SESSION[userid]=add_to_group.userId"
// 	$checkingrp_query = mysql_query($checking_qstring,$connect);
	
// 	if(!$checkingrp_query)
// 	{
// 			die('Query Failure'.mysql_error($connect));
// 	}
// 	else
// 	{
// 		if($row =mysql_fetch_array($checkingrp_query,MYSQL_ASSOC))
// 		{
				
// 		}
// 	}
// 	else
// 	{
// 		echo "<script>alert('You are not a member of this group!');</script>";
// 	}
// 	$viewgrpid_qstring =  "SELECT  groupId
// 			         	   FROM groups 
// 			         	   WHERE $_POST[group_name] = 'group_name' ";  // View Groups query 
// 	$viewgrpid_query = mysql_query($viewgrpid_qstring,$connect);
	
// 	if(!$viewgrpid_query) 			//Verification of the query
// 	{
// 		die('Query Failure'.mysql_error($connect));
// 	}
// 	else
// 	{
// 		if($row =mysql_fetch_array($viewgrpid_query,MYSQL_ASSOC))
// 		{
// 				if($_SESSION['userid'] == $row['group_owner'])
// 				{
// 					$_SESSION['group_name']= $row['group_name'];
// 					$_SESSION['group_type'] = $row['group_type'];
// 					$_SESSION['group_desc'] = $row['group_description'];
					
// 					echo($_SESSION['group_name']);
// 					echo($_SESSION['group_type']);
// 					echo($_SESSION['group_desc']);
// 					//echo('<script>location.replace("view_groups.php")</script>');
					
// 				}
// 		}
// 		else
// 		{
// 			echo "<script>alert('No Groups');</script>";
// 		}
// 	$insert_qstring = "INSERT INTO add_to_group
// 			(
// 				userId,
// 				groupId,
// 				date_added
// 			) 
// 			VALUES
// 			(
// 				'$_SESSION['userid']',
// 				'$_SESSION['group_ID']',
// 				'NOW()'
// 			)";
	
// 	$insert_query = mysql_query($insert_qstring, $connect);


// 	if(!$insert_query)
// 	{
// 		die('Query error'.mysql_error($connect));
// 	}

// 	else
// 	{
// 		echo"<script>alert('added to group')</script>";
// 		echo "<script>location.replace('groups.php')</script>";
// 	}
// }
else if(!isset($_GET['a']))
{
	echo '<script>alert("Error occured \nReturning you to the home page")</script>';
	echo '<script>location.replace("register.php")</script>';
}

?>
