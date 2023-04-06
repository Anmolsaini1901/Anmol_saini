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
          background-color: rgb(224, 205, 205);
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
        <?php
		
		
		$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>

       <div class="navbar">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="ViewStudent.html">Student</a>
                <a href="ViewParent.html">Parent</a>
                <a href="ViewTeacher.html">Teacher</a>
                <a href="ViewClass.html">Class</a>
                <a href="lib.html">Library</a>
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
            <form method="post" action="student.php">


    			<label for="firstname">First Name:</label>
    			<input type="text"     name="firstname">
          <br><br>
          <label for="lastname">Last Name:</label>
    			<input type="text"    name="lastname">
          <br><br>
          <label for="email"> Student Email-ID:</label>
    			<input type="text"  name="email">
          <br><br>
          <label for="Gender"> Gender:</label>
    			<input type="text"   name="Gender">

    			
			
			    <br>
			
			<label>Select Parent:</label>
			<select name="Parent_id">
				<?php
				$sql = mysqli_query($link, "SELECT Parent_id FROM Parent");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['Parent_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			
                        <input type="submit" name="submit" value="submit">
			<br>
                        </form>

	
		
	
		<?php
		
		if (isset($_POST['submit'])) {
		s
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$Gender = $_POST['Gender'];
			$Parent_id = $_POST['Parent_id'];
		    

			$sql = "INSERT INTO Pupil (firstname,lastname,email,Gender,Parent_id) VALUES ('$firstname','$lastname','$email','$Gender','$Parent_id')";
			if (mysqli_query($link,$sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		    
		}
		
		$link->close();
		?>
	
		<hr>
		

	
	</body>

</html>