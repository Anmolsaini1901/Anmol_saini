<?php

$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}

if(isset($_POST['submit'])){
    
    // Escape user inputs for security
    $book_id = mysqli_real_escape_string($link, $_POST['book_id']);
    
    // Attempt to delete record
    $sql = "DELETE FROM library WHERE Book_id='$book_id'";
    if(mysqli_query($link, $sql)){
        echo "Record deleted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

mysqli_close($link);
?>

<!-- HTML form to get the book ID from user -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Enter Book ID to delete:</label>
    <input type="text" name="book_id">
    <input type="submit" name="submit" value="Delete">
</form>
