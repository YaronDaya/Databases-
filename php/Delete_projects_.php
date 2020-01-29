<?php
if((isset($_POST["id_"]))&&(!empty($_POST["id_"]))){

include_once('connent.php');

$projID= $_POST['id_'];



	$sql ="DELETE FROM Projects WHERE ID=$projID";
	if(mysqli_query($conn,$sql)){

			echo "projID: ".$projID."  is deleted succefuly";
		}
		else {
		echo "projectID: ".$projID." ERROR_ID_NOT_EXISTS";
		}



}else{
	echo "projectID: ".$projID. "<br>Error: id is  empty<br>";
}
$conn->close();
?>
