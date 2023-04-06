
                              
<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $pswrepeat = $_POST['pswrepeat'];
    
   
   

    $sql = "INSERT INTO Register (email,psw,pswrepeat) VALUES ('$email','$psw','$pswrepeat')";
    if (mysqli_query($link,$sql)) {
      echo "<h1><b>_______________THANKYOU FOR REGISTRATION___________-_";
    } else {
      echo "Error adding record ";
    }

}

?>