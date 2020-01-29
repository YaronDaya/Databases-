<?php
include_once('connent.php');

$sql="SELECT * FROM Projects";
$result = mysqli_query($conn,$sql);
//$resultCheck =mysqli_num_row($result);

if($result->num_rows > 0){
  echo "<table>";
  echo "<tr><th>Project_number</th><th>Workspace</th><th>Description</th><th>Client_name</th><th>Starting_Date</th><th>Project_name</th></tr>";
  while ($row = mysqli_fetch_assoc($result)){

    echo "<tr><td>".$row['Project_number']."</td><td>".$row['Workspace']. "</td><td>".$row['Description']."</td><td>".$row['Client_name']."</td><td>".$row['Starting_Date']."</td><td>".$row['Project_name']."</td></tr>";
  }

  echo "</table>";
}else{
echo "0 result";
}

?>
