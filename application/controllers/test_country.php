<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip = $_SERVER['HTTP_CLIENT_IP'];                
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
                $ip = $_SERVER['REMOTE_ADDR'];

$url = "https://tools.keycdn.com/geo.json?host=$ip";
$dt = file_get_contents($url);
$dt = json_decode($dt, true);

echo "<pre>";
print_r($dt);
echo "</pre>";

}