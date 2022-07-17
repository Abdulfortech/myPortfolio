<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


// fetching contact Info
$contacts = $conn->query("SELECT * FROM accounts WHERE account_id=1")or die($conn->error);
while ($row = $contacts->fetch_assoc()) {
    $name = $row['fname'] ." ". $row['lname'];
    $phone = $row['phone'];
    $email = $row['email'];
    $whatsapp = $row['whatsapp'];
    $linkedin = $row['linkedin'];
    $twitter = $row['twitter'];
    $github = $row['github'];
    $picture = $row['picture'];
    $logo = $row['logo'];
}

?>
