<?php
if((isset($_POST["id_up"]))&&(!empty($_POST["id_up"]))){

include_once('connent.php');

$updatengineerID= $_POST['id_up'];
$updatePHONE=$_POST['phone_numberUp'];
$updateSstreet_name=$_POST['Street_name'];
$updateStreet_number=$_POST['Street_number'];
$updateCityName=$_POST['city'];
$updateState=$_POST['state'];

echo "<br>engineerID:".$updatengineerID."<br>";

	$sql ="UPDATE engineer SET Phone_number=$updatePHONE  WHERE id=$updatengineerID";
	mysqli_query($conn,$sql);
	echo "engineer: ".$updatengineerID."  is UPDATE succefuly";

$update="UPDATE address SET Street_number='$updateStreet_number',Street_name='$updateSstreet_name',City='$updateCityName',State='$updateState' WHERE id=$updatengineerID";
mysqli_query($conn,$update);
echo "engineer: ".$updatengineerID."  is UPDATE succefuly";

}else{
	echo "<br>Error: id is  empty<br>";
}
$conn->close();
?>
