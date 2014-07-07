<?php

include_once "config.php";
include_once "sdk.php";



$conn = new UcloudApiClient(BASE_URL, PUBLIC_KEY, PRIVATE_KEY);
$params["cdn_domain"] = "ucloud.cn";
$params["begin_time"] = "2014-04-04";
$params["end_time"] = "2014-04-05";
$params["type"] = 1;
$params["count"] = 3;

$response = $conn->get("/ucdn/loganalysis", $params);
print_r($response);

#API 说明:
#   1,请输入您要查询日志分析的域名，开始时间，结束时间,日志类型，和显示结果数量。
#   2,开始时间和结束时间是字符串型，如"2014-04-04",字串长度为10，错误的格式会导致查询不成功。
#   3,如果时间区间一天表示按照每天日志分析出访问量top100文件的访问量和下载量
#   4,如果时间区间大于一天表示每天分析出的top100 然后在时间区间内相同路径访问量和下载量合并得出的结果在帅选出top100。
#POST字段说明：
#   cdn_domain  //查询日志分析的域名
#   begin_time  //查询日志分析的起始时间
#   end_time    //查询日志分析的结束时间
#   type        // 日志分析 的类型 1：下载最多  2：流量最多
#   count       //查询结果显示数量 最多100个
#返回值字段说明：
#ret_code      //执行结果状态码 0：执行成功 
#error_message //错误提示语
#data          //返回日志分析结果，结构如下：
#其中参数
#file_download_count 代表文件下载次数
#file_traffic 代表文件下载量单位MB
#file_url 代表访问的文件路径
#Array
#(
#    [ret_code] => 0
#    [data] => Array
#    (
#        [0] => Array
#        (
#            [file_download_count] => 68
#            [file_traffic] => 0.32
#            [file_url] => http://ucloud.cn/LOGO.png
#        )
#
#        [1] => Array
#        (
#            [file_download_count] => 57
#            [file_traffic] => 0.51
#            [file_url] => http://ucloud.cn/acea4778cdec704477c905deacc61ca2.png
#        )
#
#        [2] => Array
#        (
#            [file_download_count] => 23
#            [file_traffic] => 6.81
#            [file_url] => http://ucloud.cn/c4026298060cf87c6ffa40ac785cfa5f.rar
#        )
#
#    )
#
#    [error_message] => 操作成功
#)
#
