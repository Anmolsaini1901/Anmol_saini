<html>
    <body>
        <?php
        $link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
        // Check connection
        if ($link === false) {
            die("Connection failed: ");
        }
        
        // Delete record from database when the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $class_id = $_POST['class_id'];
            $sql = "DELETE FROM class WHERE class_id = $class_id";
            mysqli_query($link, $sql);
            header("Location: {$_SERVER['PHP_SELF']}");
            exit;
        }
        ?>
        
        <h3>Delete Class Record</h3>
        
        <form method="post">
            <label for="class_id">Class ID:</label>
            <input type="number" id="class_id" name="class_id" required>
            <br><br>
            <input type="submit" value="Delete">
        </form>
    </body>
</html>
