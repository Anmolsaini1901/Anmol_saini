<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address_t = $_POST['address_t'];
    $Phone_no = $_POST['Phone_no'];
    $Qualification = $_POST['Qualification'];
    $sub_taught = $_POST['sub_taught'];
   

    $sql = "INSERT INTO Teacher (first_name,last_name,address_t,Phone_no,Qualification,sub_taught) VALUES ('$first_name','$last_name','$address_t','$Phone_no','$Qualification','$sub_taught')";
    if (mysqli_query($link,$sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>