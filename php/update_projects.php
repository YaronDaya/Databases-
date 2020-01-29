<?php
if((isset($_POST["id_upro"]))&&(!empty($_POST["id_upro"]))){

include_once('connent.php');

$updateprojID= $_POST['id_upro'];
$updateprojworkspace=$_POST['Workspace_up'];
$updateDescription=$_POST['Description_up'];
$updateClientName=$_POST['Client_name_up'];
$updateDate=$_POST['upDate_of_project'];
$projName=$_POST['Project_name_up'];


echo"the id is ".$updateprojID;


$sql ="UPDATE `Projects` SET `Workspace`=$updateprojworkspace,`Description`=$updateDescription,`Client_name`=$updateClientName,`Starting_Date`=$updateDate,`Project_name`=$projName WHERE `Project_number`=$updateprojID";
if(mysqli_query($conn,$sql)){

	echo "project: ".$updateprojID."  is update succefuly";
}

else{
	echo "<br>Error: id is  empty<br>";
}
}

$conn->close();
?>
