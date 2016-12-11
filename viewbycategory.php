<?php


$category = $_GET['category'];

$servername = "classroom.cs.unc.edu";
$username = "psanka";
$password = "random123";
$dbname = "psankadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

 $sql = "SELECT CategoryID FROM Categories WHERE CategoryName = '".$category ."'";
    
     $result = $conn->query($sql);
$categoryid;
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["StudentID"]."";
        $categoryid = $row["CategoryID"];
    }
 $sql = "SELECT * FROM Posts p WHERE p.CategoryID =".$categoryid;
    echo "I made it here";
echo $_GET['id'];
     $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Title"]."";
        $title = $row["Title"];
        $description = $row["Description"];
        $price = $row["Price"];
        
    }
    
    }

echo "<b>
<center>Database Output</center>
</b>
<br>
<br>";

echo "<b>
$title-name $description-name2</b>
<br>";
    ?>