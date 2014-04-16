<?php
include ('header2.html');

		$connect = mysql_connect('localhost','admin','admin123');
		$recipient_id; 
		if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
          $sql = "SELECT groupId, group_name, group_type, group_description FROM groups";
          $_SESSION['USERS'] = mysql_query($sql);
        ?>	
		
		<table align="center" font="verandana,arial,san-serif" size="11px" color="#E0E0E0" width="1px" border="collapse">

          <tr>
            <th>Group ID</th>
            <th>Group Name</th>
            <th>Group Type</th>
            <th>Group Description</th>
          </tr>
		  
		 <?php
			$result=$_SESSION['USERS'];
			while($rows=mysql_fetch_array($result))
			{
		?>
		  <tr>
		  						<td><?php echo "{$rows['groupId']}"?></td>
		  						<td><?php echo "{$rows['group_name']}"?></td>
                  <td><?php echo "{$rows['group_type']}"?></td>
                  <td><?php echo "{$rows['group_description']}"?></td>
              </tr>  
		 <?php
		 }
?>

