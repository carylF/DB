<?php
include ('header2.html');

		$connect = mysql_connect('localhost','admin','admin123');
		$recipient_id; 
		if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
          $sql = "SELECT userId, fname, lname FROM users";
          $_SESSION['USERS'] = mysql_query($sql);
        ?>	
		
		<table align="center" font="verandana,arial,san-serif" size="11px" color="#E0E0E0" width="1px" border="collapse">
          <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last name</th>
          </tr>
		  
		 <?php
			$result=$_SESSION['USERS'];
			while($rows=mysql_fetch_array($result))
			{
		?>
		  <tr>
		  						<td><?php echo "{$rows['userId']}"?></td>
                  <td><?php echo "{$rows['fname']}"?></td>
                  <td><?php echo "{$rows['lname']}"?></td>

              </tr>  
		 <?php
		 }
?>



























//sql statement to selete what to search 

$sql="SELECT user_id,status,reg_id FROM users";

// run sql statement
$result= mysql_query($sql) or die(mysql_error());

echo '<h1> Report on Users </h1>';

while($row3=mysql_fetch_array($result)){	

		 		$userid=$row3['user_id'];
		 		$status=$row3['status'];
				$regid=$row3['reg_id'];
				
				echo'<table border="1">','<tr>','<th> User ID</th>','<th> User Status </th>','<th> User Register ID </th>','</tr>',
				'<tr>','<td>'.$userid.'</td>','<td>'.$status.'</td>','<td>'.$regid.'</td>','</tr>','</table>','<br>';
		
}

echo "Password not displayed for security purpose";


mysql_close();

?>


