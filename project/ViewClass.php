<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Classes Detail</h3>
	
		<table>
		
			<tr>
				<th width="150px">Class ID<br><hr></th>
                                <th width="150px">Pupil ID<br><hr></th>
				<th width="250px">Teacher ID<br><hr></th>
                                <th width="150px">Class Level<br><hr></th>
				<th width="250px">Class Section<br><hr></th>
				

                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT class_id,Pupil_id,Teacher_id,classlevel,classsection FROM class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['class_id']}</th>
                                <th>{$row['Pupil_id']}</th>
				<th>{$row['Teacher_id']}</th>
				 <th>{$row['classlevel']}</th>
				<th>{$row['classsection']}</th>
				
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

