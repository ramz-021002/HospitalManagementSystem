<!DOCTYPE html>
<html>
    <body>
        <?php

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "Hospital";

        $conn = new mysqli($servername,$username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: "
                . $conn->connect_error);
        }

        $fname =  $_REQUEST['fname'];
        $lname =  $_REQUEST['lname'];
        $phno = $_REQUEST['phno'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql = "INSERT INTO REGISTRATIONDETAILS VALUES('$fname','$lname', '$phno', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
		}
     
        mysqli_close($conn);
        ?>
    </body>
</html>