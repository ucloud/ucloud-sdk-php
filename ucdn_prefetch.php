<?php

include_once "config.php";
include_once "sdk.php";



$conn = new UcloudApiClient(BASE_URL, PUBLIC_KEY, PRIVATE_KEY);
$params["cdn_domain"] = "ucloud.cn";
$params["url_list"] = "http://ucloud.cn/logo.png";

$response = $conn->post("/ucdn/prefetch", $params);

print_r($response);

#API 说明:
#1) 文件预取：
#   1,填写要预取的域名和预取的文件的完整url，并且每个url要以http://开头，如 http://ucloud.cn/images/test.jpg。
#   2,各个URL之间以分号(";")隔开，一次最多10个文件。
#   3,请注意区分URL中的字母的大小写，错误的大小写会导致预取无效。
#

#POST字段说明：
#   cdn_domain //要预取的域名
#   url_list   //提交的预取文件url列表

#返回值字段说明：
#ret_code      //执行结果状态码 0：执行成功 
#data          //执行结果返回值 true ：成功   false：失败
#error_message //错误提示语

