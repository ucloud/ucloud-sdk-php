<?php

include_once "config.php";
include_once "sdk.php";



$conn = new UcloudApiClient(BASE_URL, PUBLIC_KEY, PRIVATE_KEY);
$params["cdn_domain"] = "ucloud.cn";
$params["begin_time"] = "2014-06-10";
$params["end_time"] = "2014-07-16";

$response = $conn->get("/ucdn/tasksearch", $params);

print_r($response);

#API 说明:
#   1，输入您要查询刷新任务的域名，提交的开始时间和结束时间查询刷新任务执行进度。
#   2，开始时间和结束时间是字符串型，如"2014-04-04",字串长度为10，错误的格式会导致查询不成功。

#GET字段说明：
#   cdn_domain  //查询刷新任务的域名
#   begin_time  //查询刷新任务的起始时间
#   end_time    //查询刷新任务的结束时间
#   state       //查询刷新任务的状态 0代表成功，1代表等待处理，2代表正在处理，3代表失败，4代表未知状态
#   cdn_domain，begin_time，end_time 三个参数是必选参数,state是可选参数，默认是筛选所有状态

#返回值字段说明：
#ret_code      //执行结果状态码 0：执行成功 
#error_message //错误提示语
#data          //是一个数组，每个数据代表一个任务详情，具体结构如下：

#data数组中参数说明：
#cdn_domain 代表提交刷新任务的域名
#start_time 代表刷新任务提交时间
#check_time 代表刷新任务状态的检测时间
#percent    代表刷新任务执行的百分比
#state      代表刷新任务状态
#url_list   代表刷新的文件路径
#purge_id   代表刷新请求id
#Array
#(
#    [ret_code] => 0
#    [data] => Array
#    (
#        [0] => Array
#        (
#            [cdn_domain] => ucloud.cn
#            [check_time] => 1402497666
#            [percent] => 0
#            [purge_id] => f505badf-9ed6-4ba3-a498-766530f94996
#            [start_time] => 1402411906
#            [state] => 3
#            [url_list] => Array
#            (
#                [0] => http://ucloud.cn/images/test.png
#            )
#        )
#
#        [1] => Array
#        (
#            [cdn_domain] => ucloud.cn
#            [check_time] => 1402497666
#            [percent] => 0
#            [purge_id] => f505badf-9ed6-4ba3-a498-766530f94996
#            [start_time] => 1402411906
#            [state] => 3
#            [url_list] => Array
#            (
#                [0] => http://ucloud.cn/images/test.png
#            )
#
#        )
#
#    [error_message] => 操作成功
#)
#
