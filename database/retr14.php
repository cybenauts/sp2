<?php

$conn= new mysqli('localhost','root','','moonis');
 
$sql = "SELECT * FROM registration  ";//Limit 5 offset 6
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Address</th><th>E-mail</th><th>Phone Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row['address']."</td><td>".$row['email']."</td><td>".$row['phno']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>