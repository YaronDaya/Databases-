<?php
include_once('connent.php');

$ProjectId=$_POST['Id_Show'];




$sql="SELECT * FROM `engineer` WHERE id IN(SELECT ID FROM grade WHERE project_number=$ProjectId)GROUP BY Field_number ";
$result = mysqli_query($conn,$sql);
//$resultCheck =mysqli_num_row($result);

if($result->num_rows > 0){

  #echo "<table>";
  #echo "<tr><th>ID</th><th>Birth_date</th><th>Phone_number</th><th>Age</th><th>FName</th><th>LName</th><<th>Field_number</th></tr>";
  while ($row = mysqli_fetch_assoc($result)){
    echo "<table border='4' class='pure-table' cellspacing='0'>

                <tr>
                <td  colspan='8'>Busy Engineers</td>
                </tr>
                  <tr>
                  <th>ID</th>
                  <th>Date of birth</th>
                  <th>Phone number</th>
                  <th>Age</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Field number</th>
                  </tr>";

                  echo "<tr>";
                 echo "<td>" . $row['ID'] . "</td>";
                 echo "<td>" . $row['Birth_date'] . "</td>";
                 echo "<td>" . $row['Phone_number'] . "</td>";
                  echo "<td>" . $row['Age'] . "</td>";
                 echo "<td>" . $row['FName'] . "</td>";
                 echo "<td>" . $row['LName'] . "</td>";
                 echo "<td>" . $row['Field_number'] . "</td>";
                  echo "</tr>";

        echo "</table>";
    #echo "<tr><td>".$row['ID']."</td><td>".$row['Birth_date']. "</td><td>".$row['Phone_number']."</td><td>".$row['Age']."</td><td>".$row['FName']."</td><td>".$row['LName']."</td><td>".$row['Field_number']."</td></tr>";
  }

  #echo "</table>";
}else{
echo "0 result";
}

?>
