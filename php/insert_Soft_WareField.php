<?php

include_once('connent.php');

$insretFieldName=$_POST['Field_Name'];
$insretExpertise=$_POST['expertise'];


$sql = "INSERT INTO software_Field (Field_name,Expertise)
            VALUES ('$insretFieldName','$insretExpertise')";

            if (mysqli_query($conn, $sql)) {
            echo "New software_Field created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


$conn->close();

?>
