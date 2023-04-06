<?php
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed:");
}

// Check if the delete button has been pressed
if(isset($_POST['delete'])) {
    $teacher_id = $_POST['teacher_id'];
    
    // Delete data from the table
    $sql = "DELETE FROM Teacher WHERE Teacher_id = $teacher_id";
    if(mysqli_query($link, $sql)) {
        echo "Data deleted successfully.";
    } else {
        echo "Error deleting data: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>

<html>
<body> 
    <h3>Delete Teacher Data</h3>
    <form method="post" action="">
        <label for="teacher_id">Teacher ID:</label>
        <input type="text" id="teacher_id" name="teacher_id">
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>
