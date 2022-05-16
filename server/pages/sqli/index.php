<?php
if (isset($_POST['password'])) {

 	$dbhost = "localhost";
 	$dbuser = "server";
 	$dbpass = "Server2022&";
 	$db = "sqli";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 	
 	if ($conn->connect_error) {
 		die("Connection failed: " . $conn->connect_error);
 	}

    $password = $_POST['password'];
    
    $sql = "SELECT password FROM users where password='$password';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
            echo ('<h1>Secured content!</h1>');
    } else {
            include("login.html");
            echo ('Login failed');
    }
    $conn -> close();
} else {
        include("login.html");
}
