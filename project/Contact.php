<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $returnContact = $_POST['returnContact'];
    $message = $_POST['message'];
  

    $sql = "INSERT INTO Contact (name,returnContact,message) VALUES ('$name','$returnContact','$message')";
    if (mysqli_query($link,$sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>