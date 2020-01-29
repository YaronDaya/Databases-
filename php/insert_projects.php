<?php


include_once('connent.php');

$insretWorkspace=$_POST['workspace'];
$insretDescription=$_POST['description'];
$insretClientname=$_POST['client_name'];
$insretProjectname=$_POST['Project_name'];
$insretDate=$_POST['Date_of_project'];

$sql = "INSERT INTO projects ( Workspace,Description,Client_name,Starting_Date,Project_name)
            VALUES ('$insretWorkspace', '$insretDescription', '$insretClientname','$insretDate','$insretProjectname')";

            if (mysqli_query($conn, $sql)) {
            echo "New projects created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

/*
	echo "engineer: ".$engineerID."  is deleted succefuly";
*/
$conn->close();

?>
