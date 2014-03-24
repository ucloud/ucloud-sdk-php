<?php

include_once "config.php";
include_once "sdk.php";




if($argc < 3){
    print "php ./sendsms.php 1377777777777|137888888888 UCLOUD 测试短信".PHP_EOL;
    exit;
}

$conn = new UcloudApiClient(BASE_URL, PUBLIC_KEY, PRIVATE_KEY);
$params["phone"] = json_encode(explode("|", $argv[1]));
$params["content"] = $argv[2];

$response = $conn->post("/monitor/sendsms", $params);
print_r($response);
