

<?php

include_once('connent.php');


$sql="SELECT Submission,Received_Amount FROM milestone WHERE date BETWEEN NOW() AND DATE_ADD(NOW(),INTERVAL 1 MONTH) GROUP BY MONTH(date)";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0){
    while ($row = mysqli_fetch_assoc($result))
   {
    #  echo "<br> the of  Submission  is :  ".$row['Submission']." </br><br> The amount for the next month is : ".$row['Received_Amount']."</br>";

      echo "<table border='4' class='pure-table' cellspacing='0'>

                  <tr>
                  <td  colspan='8'>mile stone and Amount</td>
                  </tr>
                    <tr>
                    <th>Submission</th>
                    <th>Received Amount</th>
                    </tr>";

                    echo "<tr>";
                   echo "<td>" . $row['Submission'] . "</td>";
                   echo "<td>" . $row['Received_Amount'] . "</td>";
                    echo "</tr>";

          echo "</table>";
    }
}

else{
  echo"Error";
}
$Some="SELECT SUM(Received_Amount) FROM milestone";
$result = mysqli_query($conn,$Some);
if($result->num_rows > 0){
    while ($row = mysqli_fetch_assoc($result))
    {
    #  print"<br>";
    #  print"The total amount is : ".$row['SUM(Received_Amount)'];
    #  print"</br>";
      echo "<table border='4' class='' cellspacing='0'>

                  <tr>
                  <td colspan='8'>mile stone and Amount</td>
                  </tr>
                    <tr>
                    <th>Total Amount</th>
                    </tr>";

                    echo "<tr>";
                   echo "<td>" . $row['SUM(Received_Amount)'] . "</td>";
                    echo "</tr>";

          echo "</table>";
    }

}
$conn->close()

?>
