<?php
if((isset($_POST["id_Softer"]))&&(!empty($_POST["id_Softer"]))){

include_once('connent.php');

$searchSoftwareID= $_POST['id_Softer'];


echo "<br>software_FieldID of search:".$searchSoftwareID."<br>";

$sql = "SELECT * FROM software_Field WHERE Field_number=$searchSoftwareID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Field_number: " . $row["Field_number"]. " - Name: " . $row["Field_name"]. "Expertise: " . $row["Expertise"]. "<br>";
    }
} else {
    echo "0 results";
}



$conn->close();
}else{
	echo "<br>Error: id is  empty<br>";
}
