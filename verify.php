<?php

function cl( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }

session_start();

$_SESSION['url'] = "mysql://root:1justme1@localhost:3306/sportstream";

$url = $_SESSION['url'];
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$a = $_POST['email'];
$query = $conn->prepare("SELECT * FROM users WHERE BINARY emailaddress = (?)");
$query->bind_param("s", $a);
$query->execute();
$result_employees = $query->get_result();

if ($result_employees->num_rows == 1) {
    $userpass = $result_employees->fetch_assoc()["password"];
    cl($userpass);
    if ($userpass == $_POST['password']){
        header("Location: /main.php");
        $_SESSION['username']=$_POST['email'];
    }else{
        header("Location: /index.php?reason=badpass");
    }
}else{
    header("Location: /index.php?reason=baduser");
}
die;
?>