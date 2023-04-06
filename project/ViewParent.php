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
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Father Name<br><hr></th>
				<th width="150px">Mother  Name<br><hr></th>
				<th width="250px">PHONE NO. Name<br><hr></th>
				<th width="250px">ADDRESS<br><hr></th>
				<th width="250px"> Email ID<br><hr></th>

                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Parent_id,father_name,mother_name,phone_no,address_p,Email   FROM Parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Parent_id']}</th>
				<th>{$row['father_name']}</th>
				<th>{$row['mother_name']}</th>
				<th>{$row['phone_no']}</th>
				<th>{$row['address_p']}</th>
				<th>{$row['Email']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

