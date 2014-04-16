<?php
include ('header2.html');

		$connect = mysql_connect('localhost','admin','admin123');
		$recipient_id; 
		if(!mysql_select_db('mybook'))
					{
						die('Failure selecting Database'. mysql_error());
					}
          $sql = "SELECT friend, fname, types FROM friend_of JOIN users WHERE friend_of.friend_owner=userId";
          $_SESSION['USERS'] = mysql_query($sql);
        ?>	
		
		<table align="center" font="verandana,arial,san-serif" size="11px" color="#E0E0E0" width="1px" border="collapse">

          <tr>
            <th>Friend ID</th>
            <th>Friend of</th>
            <th>Friend Type</th>
          </tr>
		  
		 <?php
			$result=$_SESSION['USERS'];
			while($rows=mysql_fetch_array($result))
			{
		?>
		  <tr>
		  						<td><?php echo "{$rows['friend']}"?></td>
		  						<td><?php echo "{$rows['fname']}"?></td>
                  <td><?php echo "{$rows['types']}"?></td>
              </tr>  
		 <?php
		 }
?>
