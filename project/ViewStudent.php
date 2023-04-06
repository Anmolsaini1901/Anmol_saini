<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">Pupil ID<br><hr></th>
				<th width="150px">Parent ID<br><hr></th>
				
				<th width="150px">First name<br><hr></th>
				<th width="150px">Last name<br><hr></th>
				<th width="150px">Email ID<br><hr></th>
				<th width="150px"> Gender<br><hr></th>
				
                
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT Pupil_id,Parent_id,firstname,lastname,email,Gender  FROM Pupil");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Pupil_id']}</th>
				<th>{$row['Parent_id']}</th>
				
				<th>{$row['firstname']}</th>
				<th>{$row['lastname']}</th>
				<th>{$row['email']}</th>
				<th>{$row['Gender']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


