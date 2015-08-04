<?php

include_once "config.php";
include_once "sdk.php";




if($argc < 3){
    print "php ./sendsms.php '1377777777777|137888888888' 'UCLOUD'".PHP_EOL;
    exit;
}

$conn = new UcloudApiClient(BASE_URL, PUBLIC_KEY, PRIVATE_KEY);
$params['Action'] = "SendSms";
$params["Content"] = $argv[2];

$phones = explode("|", $argv[1]);
foreach($phones as $key => $val){
    $params["Phone.".$key] = $val;
}

print_r($response = $conn->get("/", $params));
