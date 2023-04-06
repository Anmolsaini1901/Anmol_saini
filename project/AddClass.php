<?php

// Connect to the database using mysqli_connect
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");

// Check if the connection was successful
if ($link === false) {
    // If the connection failed, terminate the script and print an error message
    die("Connection failed: ");
}

// Check if the submit button was pressed
if (isset($_POST['submit'])) {
    // If the submit button was pressed, retrieve the class level and class section from the form using $_POST
    $classlevel = $_POST['classlevel'];
    $classsection = $_POST['classsection'];

    // Construct an SQL query to insert the new data into the "class" table
    $sql = "INSERT INTO class (classlevel,classsection) VALUES ('$classlevel','$classsection')";

    // Execute the query using mysqli_query
    if (mysqli_query($link,$sql)) {
        // If the query was successful, print a success message
        echo "New record created successfully";
    } else {
        // If the query failed, print an error message
        echo "Error adding record";
    }
}


?>
