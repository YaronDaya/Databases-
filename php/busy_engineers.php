<?php
include_once('connent.php');



$sql="SELECT grade.ID,COUNT(grade.ID),engineer.FName,engineer.LName FROM engineer JOIN grade ON engineer.ID=grade.ID GROUP BY ID ORDER BY COUNT(ID)DESC LIMIT 1";
$result = mysqli_query($conn,$sql);

 #echo "$Development_tools_Id";

 #echo "------------";

if($result->num_rows > 0){

    while ($row = mysqli_fetch_assoc($result))
   {
     echo "<table border='4' class='pure-table' cellspacing='0'>

                 <tr>
                 <td  colspan='8'>Busy Engineers</td>
                 </tr>
                   <tr>
                   <th>ID</th>
                   <th>Count (grade id)</th>
                   <th>FNAME</th>
                   <th>LNAME</th>
                   </tr>";

                   echo "<tr>";
                  echo "<td>" . $row['ID'] . "</td>";
                  echo "<td>" . $row['COUNT(grade.ID)'] . "</td>";
                  echo "<td>" . $row['FName'] . "</td>";
                  echo "<td>" . $row['LName'] . "</td>";
                   echo "</tr>";

         echo "</table>";

    }

}
else{
  echo"Error";
}
/*
echo "<table border='4' class='table' cellspacing='0'>

            <tr>
            <td class='hed' colspan='8'>Busy Engineers</td>
            </tr>
              <tr>
              <th>ID</th>
              <th>Count (gradeid)</th>
              <th>NAME</th>
              </tr>";

              echo "<tr>";
                echo "<td>" . "ID" . "</td>";
            # echo "<td>" ." 'COUNT(grade.ID)'" . "</td>";
            #  echo "<td>" . "'Name'" . "</td>";
              echo "</tr>";

    echo "</table>";

*/
?>
