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
        <body bgcolor="#df0000">
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
                  <a href="Viewlib.php">Library</a>
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
                <a href="deletestudent.php">Student</a>
                <a href="deleteparent.php">Parent</a>
                <a href="deleteteacher.php">Teacher</a>
                <a href="deleteclass.php">Class</a>
                <a href="deletelib.php">Library</a>
            </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Login
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="login.php">Login now</a>
              <a href="register.html">Register now</a>
             
          </div>
      </div>
          <a href="Contact.html">Contact Us</a>
      </div>
     <?php $link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed:");}
    ?>

        <div>
            <br>
            <form method="post" action="testclass.php">

    		<H1>TOTAL  CAPACITY OF EACH CLASS IS 50 STUDENTS</H1>
             

        <label for="classlevel"> <h3><b>Class level:</b></h3></label>
        <input type="text" name="classlevel">
        <br><br>
 
        <label for="classsection"><h3><b>class Section</b></h3>:</label>
        <input type="text" name="classsection">
        <br><br>

        <br><select name="Pupil_id"> Pupil Id:
				<?php        
				
			
				$sql = mysqli_query($link, "SELECT Pupil_id, firstname FROM Pupil");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['Pupil_id']}'>{$row['firstname']}</option>";
				}
				
				
				?>
			</select><br>
               
        
       

    			<input type="submit" name="submit">

    		</form>
                <?php
                if (isset($_POST['submit'])) {
                        $Pupil_id = $_POST['Pupil_id'];

                        $classlevel = $_POST['classlevel'];
                    
                        $classsection = $_POST['classsection'];
                      
                    
                        $sql = "INSERT INTO class (Pupil_id,classlevel,classsection) VALUES ('$Pupil_id','$classlevel','$classsection')";
                        if (mysqli_query($link,$sql)) {
                          echo "New record created successfully";
                        } else {
                          echo "Error adding record";
                        }
                    
                    }
                    $link->close();
                    
                    ?>

        </div>

    </body>
</html>
