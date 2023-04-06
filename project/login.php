
<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $psw = $_POST['psw'];

   
   

    $sql = "INSERT INTO   login  (username,psw) VALUES ('$username','$psw')";
    if (mysqli_query($link,$sql)) {
      echo "Thankyou For login";
    } else {
      echo "Error adding record ";
    }

}

?>
<?php

session_start(); // Start a session to keep track of the user's login status

if (isset($_POST['login'])) { // Check if the form has been submitted

    // Get the username and psw entered by the user
    $username = $_POST['username'];
    $psw = $_POST['psw'];

    // Connect to the database
    $conn = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Construct a query to check if the username and psw match a row in the users table
    $sql = "SELECT * FROM login  WHERE username='$username' AND psw='$psw'";

    // Execute the query and get the result
    $result = mysqli_query($conn, $sql);

    // Check if there is a row in the result (i.e. if the username and psw were found in the database)
    if (mysqli_num_rows($result) == 1) {
        // The login was successful, so set the session variable to indicate that the user is logged in
        $_SESSION['loggedin'] = true;
        // Redirect the user to the home page
        header("Location: home.php");
    } else {
        // The login was unsuccessful, so show an error message
        echo "Invalid username or psw.";
    }

    // Close the database connection
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h1>Login Page</h1>

<form method="POST" action="login.php">
    <label>Username:</label>
    <input type="text" name="username"><br>

    <label>Password:</label>
    <input type="psw" name="psw"><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
