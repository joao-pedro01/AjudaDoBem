<?php
session_start();
$servername = "localhost";
$database = "manuntencao";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];

$sql = "SELECT * FROM manuntencao WHERE email='{$email}' LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);

if($row > 0){
    mysqli_close($conn);
    setcookie('message', 'Email já cadastrado!');
    header("location: ./index.php");
    exit();
}

$sql = "INSERT INTO manuntencao (email)
VALUES ('{$email}')";

if ($conn->query($sql) === TRUE) {
    setcookie('message', 'Email cadastrado com sucesso!!!');
} else {
    setcookie('message', "Error: " . $sql . "<br>" . $conn->error);
}

header("location: ./index.php");
mysqli_close($conn);
?>