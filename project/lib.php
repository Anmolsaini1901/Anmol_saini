<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Borrow_date  = $_POST['Borrow_date'];
    $Return_date = $_POST['Return_date'];
   
   

    $sql = "INSERT INTO library (Borrow_date,Return_date) VALUES ('$Borrow_date','$Return_date')";
    if (mysqli_query($link,$sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>