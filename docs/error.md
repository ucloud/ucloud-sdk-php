

# 错误处理

了解如何处理不同类型的 SDK 异常，包括参数错误，RetCode 不为 0 的业务异常等。

```php
use UCloud\UHost\Apis\DescribeImageRequest;
use UCloud\UHost\UHostClient;
use UCloud\Core\Exception\UCloudException;

$client = new UHostClient([
    "publicKey" => getenv("UCLOUD_PUBLIC_KEY"),
    "privateKey" => getenv("UCLOUD_PRIVATE_KEY"),
    "projectId" => getenv("UCLOUD_PROJECT_ID"),
    "region" => "cn-bj2",
]);

try {
    $req = new DescribeImageRequest();
    $req->setZone("cn-bj2-05");
    $resp = $client->describeImage($req);
} catch (UCloudException $e) {
    if ($e->getType() == UCloudException::EXC_TYPE_RET_CODE) {
        echo $e->getCode();
        echo $e->getRequestId();
    }
    echo $e->getMessage();
}
```
