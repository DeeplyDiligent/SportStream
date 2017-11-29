<?php 
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
function ordinal_suffix($num){
    $num = $num % 100; // protect against large numbers
    if($num < 11 || $num > 13){
         switch($num % 10){
            case 1: return 'st';
            case 2: return 'nd';
            case 3: return 'rd';
        }
    }
    return 'th';
}
session_start();
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

$a = "%".json_decode(file_get_contents("php://input"),true)["yousent"]."%";
$query = $conn->prepare("SELECT * FROM sportsurls WHERE Description LIKE (?)");
$query->bind_param("s", $a);
$query->execute();
$rs = $query->get_result();
$result = $rs->fetch_all();
$conn->close();


$data = file_get_contents("php://input");
echo(json_encode($result));

?>