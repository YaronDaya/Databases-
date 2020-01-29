<?php

if((isset($_POST["id"]))&&(!empty($_POST["id"]))){

include_once('connent.php');

$engineerID= $_POST['id'];



	$sql ="DELETE FROM `Engineer` WHERE ID=$engineerID";

	if(mysqli_query($conn,$sql))

{
	echo "engineer: ".$engineerID."  is deleted succefuly";
}
else{
	echo"engineer: " .$engineerID. "<br> ERROR_ID_NOT_EXISTS ";
}
$conn->close();
}else{
	echo "<br>Error: id is  empty<br>";
}
?>
