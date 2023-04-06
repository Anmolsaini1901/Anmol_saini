<?php
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}

if (isset($_POST['delete'])) {
    $Pupil_id = $_POST['Pupil_id'];

    $sql = "DELETE FROM Pupil WHERE Pupil_id = '$Pupil_id'";
    if (mysqli_query($link,$sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>

<html>
<body> 

<?php
// Your existing PHP code to display the Pupil data
?>

<h1><b>______________________Delete a Student__________________</b></h1>
<form method="post">
    <label for="Pupil_id">Student ID:</label>
    <input type="text" id="Pupil_id" name="Pupil_id"><br><br>
    <input type="submit" name="delete" value="Delete">
</form>

</body>
</html>
