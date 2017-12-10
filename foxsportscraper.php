<?php
function cl( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }
$q = $_GET["q"];
if($q=="abcnews") {
  $xml=("http://www.abc.net.au/news/feed/45924/rss.xml");
} 

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);
$returnarray = [];

$x = $xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=7; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $date = $x->item($i)->getElementsByTagName('pubDate')->item(0)->nodeValue;
  $item_pic=$x->item($i)->getElementsByTagName('content')->item(2)->getAttribute('url');
  $item_desc=trim($x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(1)->nodeValue);
  $returnarray[$i] = array("link" => $item_link,
                          "title" => $item_title,
                          "picture" => $item_pic,
                          "desc" => json_encode($item_desc),
                          "date" => $date);
}

echo(json_encode($returnarray));


?>
