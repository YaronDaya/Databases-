<?php
if((isset($_POST["id_PrOject"]))&&(!empty($_POST["id_PrOject"]))){

include_once('connent.php');

$searchID= $_POST['id_PrOject'];


echo "<br>ProjectID:".$searchID."<br>";

$sql = "SELECT * FROM Projects WHERE Project_number=$searchID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id_PrOject: " . $row["Project_number"] ."Workspace: ".  $row["Workspace"].  "Description:" .$row["Description"]." - Name: ". $row["Client_name"].
        "Starting_Date: ". $row["Starting_Date"]. "Project_name: ". $row["Project_name"];

    }
} else {
    echo "0 results";
}

/*
	echo "engineer: ".$engineerID."  is deleted succefuly";
*/
$conn->close();
}else{
	echo "<br>Error: id is  empty<br>";
}
