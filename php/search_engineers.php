<?php
if((isset($_POST["id_E"]))&&(!empty($_POST["id_E"]))){

include_once('connent.php');

$searchID= $_POST['id_E'];
;

echo "<br>engineerID:".$searchID."<br>";

$sql = "SELECT * FROM Engineer WHERE ID=$searchID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<table border='4' class='pure-table' cellspacing='0'>

                  <tr>
                  <td class='hed' colspan='8'>Busy Engineers</td>
                  </tr>
                    <tr>
                    <th>id</th>
                    <th>Birth date</th>
                    <th>Phone number</th>
                    <th>Age</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Field number</th>
                    </tr>";

                    echo "<tr>";
                   echo "<td>" . $row["ID"] . "</td>";
                   echo "<td>" . $row["Birth_date"] . "</td>";
                  echo "<td>" . $row["Phone_number"] . "</td>";
                  echo "<td>" . $row["Age"] . "</td>";
                  echo "<td>" . $row["FName"] . "</td>";
                  echo "<td>" . $row["LName"] . "</td>";
                  echo "<td>" . $row["Field_number"] . "</td>";
                    echo "</tr>";

          echo "</table>";

        #echo "id: " . $row["id"]. " - Birth_date: " . $row["Birth_date"]. "Phone_number:  " . $row["Phone_number"]. "Age :" .$row["Age"]."Name : ".$row['Name']."Field_number: ". $row["Field_number"]."<br>";
    }
} else {
    echo "0 results";
}

/*
	echo "engineer: ".$engineerID."  is deleted succefuly";
*/
$conn->close();
}else{
	echo "<br>Error: id is  empty<br>";
}
