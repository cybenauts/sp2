

<?php

$conn= new mysqli('localhost','root','','moonis');
 
 $name=$_POST['book_name'];
$sql = "SELECT firstname FROM MyGuests where firstname LIKE '$name%'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>"." $row['firstname'] ". "</p>";
    }
} else {
    echo "";
}
$conn->close();
?>