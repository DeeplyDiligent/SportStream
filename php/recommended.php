<?php
function cl( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

function delainb($a,$b){
    foreach ($a as $key => $value){
        if (($k = array_search($value, $b)) !== false) {
            unset($b[$k]);
        }
    }
    return array_values($b);
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

$a = json_decode(file_get_contents("php://input"),true)["yousent"];
$query = $conn->prepare("SELECT * FROM history WHERE user = (?) AND action = 'VIDEO' ORDER BY time LIMIT 10");
$query->bind_param("s", $a);
$query->execute();
$findtitles = $query->get_result()->fetch_all();
$alreadywatched = [];
foreach ($findtitles as  $key => $value){
    $a = $value[4];
    $query2 = $conn->prepare("SELECT * FROM sportsurls WHERE id = (?)");
    $query2->bind_param("s", $a);
    $query2->execute();
    $rs = $query2->get_result();
    $result = $rs->fetch_all();
    if(isset($result[0])){
        array_push($alreadywatched,$result[0]);
    }
}

$query2 = $conn->prepare("SELECT * FROM sportsurls ORDER BY Start DESC LIMIT 100");
$query2->execute();
$rs = $query2->get_result();
$sportsindateaddedorder =   $rs->fetch_all();
$conn->close();

$newshowslessalreadywatched = delainb($alreadywatched,$sportsindateaddedorder);

$finalrecommended = array("newforuser" => $newshowslessalreadywatched, "alreadywatched" => $alreadywatched);
echo(json_encode($finalrecommended));
?>