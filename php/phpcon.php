
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="CREATE TABLE name(
First_name VARCHAR(30) NOT NULL,
Last_name VARCHAR(30) NOT NULL,
ID VARCHAR(30) NOT NULL, FOREIGN KEY(ID) REFERENCES Engineer((ID)
)";

// sql to create table

$sql = "CREATE TABLE Projects (
       Project_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Workspace VARCHAR(30) NOT NULL,
        Description VARCHAR(30) NOT NULL,
        Client_name VARCHAR(50) NOT NULL,
        Starting_Date INT(6) UNSIGNED,
  	   Project_name VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Projects created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}




$sql="CREATE TABLE name(
First_name VARCHAR(30) NOT NULL,
Last_name VARCHAR(30) NOT NULL,
ID VARCHAR(30) NOT NULL, FOREIGN KEY(ID) REFERENCES Engineer((ID)
)";

$sql = "CREATE TABLE Engineer (
	ID INT (6) UNSIGNED  PRIMARY KEY,
	Birth_date TIMESTAMP(6) NOT NULL,
	Phone_number INT(6),
	Age INT(6) UNSIGNED
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Engineer created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql="CREATE TABLE milestone(
	Submission VARCHAR(30) NOT NULL,
	Received_Amount INT (6) UNSIGNED,
	Project_number INT(6) UNSIGNED, FOREIGN KEY(Project_number) REFERENCES Projects(Project_number)
	)";

if (mysqli_query($conn, $sql)) {
    echo "Table milestone created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql="CREATE TABLE address(
	City VARCHAR(30) NOT NULL,
	State VARCHAR(30) NOT NULL,
	ID VARCHAR(30) NOT NULL,
   FOREIGN KEY(ID) REFERENCES Engineer(ID)
	)";
if (mysqli_query($conn, $sql)) {
    echo "Table Address created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql="CREATE TABLE Street(
	Street_number int(6),
	Street_name VARCHAR(30),
	ID VARCHAR(30) NOT NULL, FOREIGN KEY(ID) REFERENCES Engineer(ID)
	)";
	if (mysqli_query($conn, $sql)) {
    echo "Table Street_tb created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


	$sql="CREATE TABLE full_name(
	First_name VARCHAR(30) NOT NULL,
	Last_name VARCHAR(30) NOT NULL,
	ID VARCHAR(30) NOT NULL, FOREIGN KEY(ID) REFERENCES Engineer((ID)
	)";

	if (mysqli_query($conn, $sql)) {
    echo "Table Name_tb created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


	$sql="CREATE TABLE software_Field(
	Field_number INT(6) UNSIGNED PRIMARY KEY,
	Field_name VARCHAR(30) NOT NULL,
	Expertise VARCHAR (30) NOT NULL
	)";
	if (mysqli_query($conn, $sql)) {
    echo "Table Software_Field created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

	$sql="CREATE TABLE month(
	Month INT(6) UNSIGNED PRIMARY KEY
	)";
	if (mysqli_query($conn, $sql)) {
    echo "Table month created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



mysqli_close($conn);

/*
$porject number=mysqli_real_escape_string($conn,$_POST['porject number']);
$workspace=mysqli_real_escape_string($conn,$_POST['workspace']);
$dscription=mysqli_real_escape_string($conn,$_POST['description']);
$client name=mysqli_real_escape_string($conn,$_POST['client name']);
$Start of projec=mysqli_real_escape_string($conn,$_POST['Start of projec']);
$Project name=mysqli_real_escape_string($conn,$_POST['Project name"']);
$porject mileStone=mysqli_real_escape_string($conn,$_POST['mileStone']);

$query="Insert into  Projects(porject_number,workspace,desripition,client_name,Start_of_project,Project_name,mileStone) VALUES('$porject_number','$workspace','$desripition','$client_name','$Start_of_project','$Project_name','$mileStone')";"

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

*/




/*

SELECT DATA FORM TABLE;
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



//UPDATE DATA
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}




$conn->close();
*/

?>
