<?php


include_once('connent.php');

$insretDatebirth=$_POST['Birth_date'];
$insretPhone_number=$_POST['Phone_number'];
$insretAge=$_POST['Age'];
$insretFName=$_POST['FName'];
$insretLName=$_POST['LName'];
$insretField_number=$_POST['Field_number'];



$sql = "INSERT INTO Engineer ( Birth_date,Phone_number,Age,FName,LName,Field_number)
            VALUES ('$insretDatebirth', '$insretPhone_number', $insretAge,$insretFName,$insretLName,$insretField_number)";

            if (mysqli_query($conn, $sql)) {
            echo "New engineer created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

/*
	echo "engineer: ".$engineerID."  is deleted succefuly";
*/
$conn->close();


?>
