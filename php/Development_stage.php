<?php
include_once('connent.php');

$Development_tools_Id=$_POST['Development_tools'];




$sql="SELECT $Development_tools_Id, `Project_number` FROM `development_tools`";
$result = mysqli_query($conn,$sql);

 #echo "$Development_tools_Id";

 #echo "------------";

if($result->num_rows > 0){
    while ($row = mysqli_fetch_assoc($result))
   {
      #echo "<br> the Development tools is :  ".$row[$Development_tools_Id]." Project_number : ".$row['Project_number']."</br>";
      echo "<table border='4' class='pure-table' cellspacing='0'>

                  <tr>
                  <td class='hed' colspan='8'>Busy Engineers</td>
                  </tr>
                    <tr>
                    <th>Development tools Id</th>
                    <th>Project number</th>
                    </tr>";

                    echo "<tr>";
                   echo "<td>" . $row[$Development_tools_Id] . "</td>";
                   echo "<td>" . $row['Project_number'] . "</td>";
                    echo "</tr>";

          echo "</table>";
    }
}
else{
  echo"Error";
}

?>
