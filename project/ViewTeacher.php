<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed:");
}
?>

<h3>See all Teacher</h3>
	
		<table>
		
			<tr>
				<th width="150px">Teacher ID<br><hr></th>
				<th width="250px">First Name<br><hr></th>
				<th width="150px">Last Name<br><hr></th>
				<th width="250px">Address Name<br><hr></th>
				<th width="250px">Phone no.<br><hr></th>
				<th width="250px">Qualification<br><hr></th>
                                <th width="250px">Subject Taught<br><hr></th>

                
			</tr>
					
			<?php
			$sql = mysqli_query($link,"SELECT Teacher_id,first_name,last_name,address_t,Phone_no,Qualification,sub_taught FROM Teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Teacher_id']}</th>
				<th>{$row['first_name']}</th>
				<th>{$row['last_name']}</th>
				<th>{$row['address_t']}</th>
				<th>{$row['Phone_no']}</th>
				<th>{$row['Qualification']}</th>
                                <th>{$row['sub_taught']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>
