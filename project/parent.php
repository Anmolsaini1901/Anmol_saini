<html>

	<head><title>School Management System</title></head>

	<body>
		
	<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
      <div class="navbar">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="ViewStudent.php">Student</a>
                <a href="ViewParent.php">Parent</a>
                <a href="ViewTeacher.php">Teacher</a>
                <a href="ViewClass.php">Class</a>
                <a href="lib.php">Library</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="AddStudent.html">Student</a>
                <a href="AddParent.html">Parent</a>
                <a href="AddTeacher.html">Teacher</a>
                <a href="AddClass.html">Class</a>
                <a href="lib.html">Library</a>
            </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Delete
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="AddStudent.html">Student</a>
              <a href="AddParent.html">Parent</a>
              <a href="AddTeacher.html">Teacher</a>
              <a href="AddClass.html">Class</a>
              <a href="lib.html">Library</a>
          </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Login
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="login.html">Login now</a>
            <a href="register.html">Register now</a>
           
        </div>
    </div>
        <a href="Contact.html">Contact Us</a>
    </div>

        <div>
            <br>
            <form method="post" action="AddParent.php">

    			<label for="father_name">Father Name:</label>
    			<input type="text" name="father_name">
          <br><br>
          <label for="mother_name">Mother Name:</label>
    			<input type="text" name="mother_name">
          <br><br>
          <label for="Email">Email ID:</label>
    			<input type="text" name="Email">
          <br><br>
          <label for="address_p">Full Address:</label>
    			<input type="text" name="address_p">
          <br><br>
          <label for="phone_no">Phone no:</label>
    			<input type="number" name="phone_no">

    			<br><br>
          
    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>

	
		<?php
		
	
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $Email = $_POST['Email'];
    $address_p = $_POST['address_p'];
    $phone_no = $_POST['phone_no'];
   

    $sql = "INSERT INTO Parent (father_name,mother_name,Email,address_p,phone_no) VALUES ('$father_name','$mother_name','$Email','$address_p','$phone_no')";
    if (mysqli_query($link,$sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
  
		
		$link->close();
}
?>
	
		<hr>
		

	
	</body>

</html>