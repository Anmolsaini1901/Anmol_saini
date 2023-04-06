<?php
// Establish a connection to the MySQL database using mysqli_connect() function
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");

// Check if the connection is successful or not using the === operator
if ($link === false) {
    // If the connection is not successful, exit the script with an error message using die() function
    die("Connection failed: ");
}

// Check if the form has been submitted by checking if the submit button has been pressed using isset() function
if (isset($_POST['submit'])) {
    // If the form has been submitted, retrieve the form data using $_POST superglobal array
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $Email = $_POST['Email'];
    $address_p = $_POST['address_p'];
    $phone_no = $_POST['phone_no'];

    // Construct the SQL query to insert the form data into the MySQL database
    $sql = "INSERT INTO Parent (father_name, mother_name, Email, address_p, phone_no) VALUES ('$father_name', '$mother_name', '$Email', '$address_p', '$phone_no')";

    // Execute the SQL query using mysqli_query() function and check if the query was successful or not
    if (mysqli_query($link, $sql)) {
        // If the query was successful, output a success message
        echo "New record created successfully";
    } else {
        // If the query was not successful, output an error message
        echo "Error adding record ";
    }

    // Close the database connection using $link->close() method
    $link->close();
}
?>
