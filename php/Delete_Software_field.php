<?php
if((isset($_POST["id_Field"]))&&(!empty($_POST["id_Field"]))){

include_once('connent.php');

$SoftwarefieldID= $_POST['id_Field'];



	$sql ="DELETE FROM software_Field WHERE ID=$SoftwarefieldID";
	if(mysqli_query($conn,$sql)){

	echo "softwarefield: ".$SoftwarefieldID."  is deleted succefuly";
}
else{
	echo "softwarefield: ".$SoftwarefieldID." ERROR_ID_NOT_EXISTS";
	}

}else{
	echo "softwarefield: ".$SoftwarefieldID. "<br>Error: id is  empty<br>"." $SoftwarefieldID";
}
$conn->close();

?>
