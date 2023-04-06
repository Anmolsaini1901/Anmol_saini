<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Book ID<br><hr></th>
				<th width="250px">Pupil ID<br><hr></th>
				<th width="150px">Borrow_Month<br><hr></th>
				<th width="250px">Return_Month<br><hr></th>
				
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Book_id,Pupil_id,Borrow_date,Return_date  FROM library");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Book_id']}</th>
				<th>{$row['Pupil_id']}</th>
				<th>{$row['Borrow_date']}</th>
				<th>{$row['Return_date']}</th>
				
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>
