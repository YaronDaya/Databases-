<?php
if((isset($_POST["id_Field"]))&&(!empty($_POST["id_Field"]))){

include_once('connent.php');

$updateSoftWareFieldID= $_POST['id_Field'];
$updatepField_name=$_POST['field_name'];
$updateExpertise=$_POST['expertise'];


echo "<br>software_FieldID:".$updateSoftWareFieldID;

	$sql ="UPDATE software_Field SET  Field_name='$updatepField_name',Expertise='$updateExpertise' WHERE id=$updateSoftWareFieldID";
	mysqli_query($conn,$sql);
	echo "SoftwareField: ".$updateSoftWareFieldID."  is update succefuly";
$conn->close();
}else{
	echo "<br>Error: id is  empty<br>";
}
?>
