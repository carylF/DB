 <?php
 
		mysql_connect("localhost", "root", "")or die("cannot connect server "); 
		mysql_select_db("dbtest")or die("Cannot select desired database");
		
		 $_username=$_POST['username'];
		 $_fname=$_POST['fname'];
		 $_lname=$_POST['lname'];
		 $_email=$_POST['email'];
		 $_dob=$_POST['dob'];

		$sql="update profile set username=$_username, fname=$_fname, lname=$_lname, email=$_email, dob=$_dob";
		if($result=mysql_query($sql))
		{
			echo "<a href='profile.php'>Return to profile</a>"
		}
		else
		{
			echo "Unable to make changes"
		}
?> 