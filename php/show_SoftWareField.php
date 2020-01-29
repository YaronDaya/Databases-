<?php
include_once('connent.php');

$sql="SELECT * FROM software_Field";
$result = mysqli_query($conn,$sql);
//$resultCheck =mysqli_num_row($result);

if($result->num_rows > 0){
  echo "<table>";
  echo "<tr><th>Field_number</th><th>Field_name</th><th>Expertise</th></tr>";
  while ($row = mysqli_fetch_assoc($result)){

    echo "<tr><td>".$row['Field_number']."</td><td>".$row['Field_name']. "</td><td>".$row['Expertise']."</td><tr>";
  }

  echo "</table>";
}else{
echo "0 result";
}

?>
