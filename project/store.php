<?php

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email= $_REQUEST['email'];
$inputAddress= $_REQUEST['inputAddress'];
$inputAddress2= $_REQUEST['inputAddress2'];
$inputCity= $_REQUEST['inputCity'];
$inputState= $_REQUEST['inputState'];
$inputZip= $_REQUEST['inputZip'];
$servername = "localhost";
$user_name = "root";
$password = "";
$dbname = "mktravels";

// Create connection

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user_name, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($conn){
    echo '<script>console.log("Connected successfully")</script>';
}

if ( isset( $_POST['submit'] ) ) {

    try {
    
        $sql = "INSERT INTO booking (firstname, lastname,email,inputAddress,inputAddress2,inputCity,inputState,inputZip) VALUES ('$firstname', '$lastname','$email','$inputAddress','$inputAddress2','$inputCity','$inputState','$inputZip')";
        // use exec() because no results are returned
        $conn->exec($sql);
        header("Location: success.html");
      } catch(PDOException $e) {
        header("Location: wrong.html");
      }
      $conn = null;
    }
    
?>