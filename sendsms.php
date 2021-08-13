<?php

include_once "config.php";
include_once "sdk.php";

if($argc < 3){
    print "php ./sendsms.php '1377777777777|137888888888' '010086'".PHP_EOL;
    exit;
}

$conn = new UcloudApiClient(BASE_URL, PUBLIC_KEY, PRIVATE_KEY, PROJECT_ID);
$params['Action'] = "SendUSMSMessage";

$phones = explode("|", $argv[1]);
foreach($phones as $key => $val){
    $params["PhoneNumbers.".$key] = $val;
}

$params['SigContent'] = "...";
$params['TemplateId'] = "...";
$params['TemplateParams.0'] = $argv[2];

print_r($params);

print_r($response = $conn->get("/", $params));
