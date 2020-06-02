<?php
function get_setting($owner) {
    $get = curl_init();
    $url = array('http://16shop.online/api/setting/get_setting.php','http://server2.16shop.online/api/setting/get_setting.php');
    $random = rand(0,1);
    curl_setopt($get, CURLOPT_URL,$url[$random]);
    curl_setopt($get, CURLOPT_POST, 1);
    curl_setopt($get, CURLOPT_POSTFIELDS, "domain=$owner");
    curl_setopt($get, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($get, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $server_output = curl_exec ($get);
    curl_close($get);
    $set = json_decode($server_output, true);
    return $set;
}

$setting = get_setting("apps-xmlverify.serveirc.com");
print_r($setting);

?>