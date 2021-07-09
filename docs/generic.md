# 泛化调用

如何调用 SDK 尚未支持的 API ？可以使用泛化调用方式。

**NOTE** 如果没有必须使用的理由，不建议使用泛化方式调用 API，因为无法享受 OpenAPI 提供的兼容性保证。

## 调用方式

```php
use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\Core\Request\Request;

$client = new Client([
    "publicKey" => getenv("UCLOUD_PUBLIC_KEY"),
    "privateKey" => getenv("UCLOUD_PRIVATE_KEY"),
    "projectId" => getenv("UCLOUD_PROJECT_ID"),
    "region" => "cn-bj2",
]);

try {
    $client->invoke(new Request([
        "Action" => "GetImage",
        "Zone" => "cn-bj2-05",
        "ImageType" => "Base",
        "OsType" => "Linux",
    ]));
} catch (UCloudException $e) {
    if ($e->getType() == UCloudException::EXC_TYPE_RET_CODE) {
        echo $e->getCode();
        echo $e->getRequestId();
    }
    echo $e->getMessage();
}
```
