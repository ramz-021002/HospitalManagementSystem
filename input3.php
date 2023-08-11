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
        $department = $_REQUEST['department'];
        $purposeofApointment = $_REQUEST['purposeofApointment'];
        $selectDate = $_REQUEST['selectDate'];
        $selectTime = $_REQUEST['selectTime'];

        $sql = "INSERT INTO BOOKINGDETAILS VALUES('$name', '$phno', '$email', '$department','$purposeofApointment',' $selectDate','$selectTime')";
        if(mysqli_query($conn, $sql)){
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
		}
     
        mysqli_close($conn);
        ?>
    </body>
</html>