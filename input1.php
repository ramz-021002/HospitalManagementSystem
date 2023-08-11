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

        $name =  $_REQUEST['name'];
        $phno = $_REQUEST['phno'];
		$email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];

        $sql = "INSERT INTO CONTACTDETAILS VALUES('$name', '$phno', '$email', '$subject','$message')";
        if(mysqli_query($conn, $sql)){
            header('Location:index.html');
        } 
        else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
		}
     
        mysqli_close($conn);
        ?>
    </body>
</html>