<?php

else if($_GET['a'] =='search')
{
	$name = $_POST['search'];
	$userid= $_SESSION['userid'];
	
	$search_qstring =  "SELECT users.fname,users.lname 
			         	   FROM users
						   WHERE fname like $name OR lname like $name'";  // View Groups query 
	$search_query = mysql_query($search_qstring,$connect);
	
	if(!$search_query) 			//Verification of the query
	{
		die('Query Failure'.mysql_error($connect));
	}
	else
	{
		while($row = mysql_fetch_array($search_query,MYSQL_ASSOC))
		{
										
			echo"<li>".$row['fname']." ".$row['lname']."</li>";	
		}
			
		}
	}
}
?>