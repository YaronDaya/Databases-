<?php
include_once('connent.php');

#$ProjectId=$_POST[''];




$sql="SELECT AVG(Grades),Project_number FROM grade GROUP BY Project_number ORDER BY AVG(Grades)DESC LIMIT 3";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    while ($row = mysqli_fetch_assoc($result))
   {
      #echo "<br>"."The three most interesting projects are :".$row['AVG(Grades)']." Project_number : ".$row['Project_number']."</br>";
      echo "<table border='4' class='pure-table' cellspacing='0'>

                  <tr>
                  <td class='hed' colspan='8'>Busy Engineers</td>
                  </tr>
                    <tr>
                    <th>AVG (Grades)</th>
                    <th>Project number</th>
                    </tr>";

                    echo "<tr>";
                   echo "<td>" . $row['AVG(Grades)'] . "</td>";
                   echo "<td>" . $row['Project_number'] . "</td>";
                    echo "</tr>";

          echo "</table>";
    }
}
else{
  echo"Error";
}

?>
