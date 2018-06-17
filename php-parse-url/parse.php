<?php
$url = 'https://github.com/programmer-kapoor';
echo "<br>";
var_dump(parse_url($url));
echo "<br>";
var_dump(parse_url($url, PHP_URL_SCHEME));
echo "<br>";
var_dump(parse_url($url, PHP_URL_USER));
echo "<br>";
var_dump(parse_url($url, PHP_URL_PASS));
echo "<br>";

echo "<br>";
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
echo "<br>";
var_dump(parse_url($url, PHP_URL_QUERY));
echo "<br>";
var_dump(parse_url($url, PHP_URL_FRAGMENT));
echo "<br>";


  $a=parse_url($url, PHP_URL_HOST);
  $a=rtrim($a,".com");
  echo $a;
?>
