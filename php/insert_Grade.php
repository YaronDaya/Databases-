<?php
include_once('connent.php');

$grade=$_POST['Grade'];
$engineerID=$_POST['EngineerID'];
$projectID=$_POST['ProjectID'];

$dateGrade= "SELECT date_grade FROM grade WHERE ID=$engineerID AND Project_number=$projectID";

if($dateGrade!= NULL){

	$month = date('m', $dateGrade);
	$year = date('Y', $dateGrade);

	$current_date=date();
	$current_month = date('m', $current_date);
	$current_year = date('Y', $current_date);

	if(($month!=$current_month)||($year!=$current_year)){

		$sql = "INSERT INTO grade (`Grades`, `ID`, `Project_number`, `date_Grade`)
		VALUES ('$grade', '$engineerID', '$projectID','$dateGrade')";

		if (mysqli_query($conn, $sql)) {
			echo "New grade added successfully to project no.".$projectID.".";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}else{
		echo "Engineer(id: ".$engineerID.") already graded project no. ".$projectID." this month.";
	}
	$conn->close();
}
?>
