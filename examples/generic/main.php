<?php

require_once '../../vendor/autoload.php';

use UCloud\Core\Client;
use UCloud\Core\Request\Request;
use UCloud\Core\Exception\UCloudException;

function main() {
    $client = new Client([
        "publicKey" => getenv("UCLOUDSTACK_PUBLIC_KEY"),
        "privateKey" => getenv("UCLOUDSTACK_PRIVATE_KEY"),
        "baseUrl" => "http://console.pre.ucloudstack.com/api",
    ]);

    try {
        $resp = $client->invoke(new Request([
            "Action" => "DescribeRegion",
        ]));
    } catch (UCloudException $e) {
        exit(1);
    }
    print_r($resp);
}

main();
