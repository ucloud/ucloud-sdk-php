# 快速开始

## 安装

使用 `composer` 安装（推荐）：

```bash
$ composer require ucloud-sdks/ucloud-sdk-php
```

## 初次使用

目前，SDK 使用 PublicKey/PrivateKey 作为唯一的鉴权方式，该公私钥可以从以下途径获取：

- [UAPI 密钥管理](https://console.ucloud.cn/uapi/apikey)

下面提供一个简单的示例：

```php
use UCloud\UHost\UHostClient;
use UCloud\Core\Exception\UCloudException;
use UCloud\UHost\Apis\CreateUHostInstanceRequest;
use UCloud\UHost\Params\CreateUHostInstanceParamDisks;

$client = new UHostClient([
    "publicKey" => getenv("UCLOUD_PUBLIC_KEY"),
    "privateKey" => getenv("UCLOUD_PRIVATE_KEY"),
    "projectId" => getenv("UCLOUD_PROJECT_ID"),
    "region" => "cn-bj2",
]);
$zone = "cn-bj2-05";

// Create Instance
try {
    $req = new CreateUHostInstanceRequest();
    $req->setName("sdk-php-example");
    $req->setZone($zone);
    $req->setImageId("...");
    $req->setLoginMode("Password");
    $req->setPassword(base64_encode("UCloud1234!"));
    $req->setCPU(1);
    $req->setMemory(1024);

    $disk = new CreateUHostInstanceParamDisks();
    $disk->setSize(40);
    $disk->setType("CLOUD_SSD");
    $disk->setIsBoot("True");

    $req->setDisks([$disk]);

    $resp = $client->createUHostInstance($req);
} catch (UCloudException $e) {
    throw $e;
}
$id = $resp->getUHostIds()[0];
```

将上述代码中 client 相关配置，以及主机的 image id 等，替换成自己的配置，即可创建一台云主机。

在该示例中，使用 SDK 完成了一个创建云主机的请求。至此，已经涵盖了 SDK 的基本核心用法，可以构建自己的脚本啦！

SDK 中的每一个 api 调用都有详细的注释文档，
可以通过 Editor/IDE 跳转到具体的方法中查看（也可以 [查看接口文档](https://docs.ucloud.cn/api/summary/README) ），
并根据 IDE 自动补全和报错信息继续探索 SDK 的用法。

如果需要了解这段代码提及但未完全覆盖的使用技巧，请参考：

- [通用配置](configure.md)，了解如何配置 SDK，如日志、重试、服务访问端点（公有云、专有云）等
- [错误处理](error.md)，了解如何处理不同类型的 SDK 异常，包括参数错误，RetCode 不为 0 的业务异常等
- [类型系统](typesystem.md)，了解 SDK 如何校验参数，并规范化 API 的返回值。
- [请求中间件](middleware.md)，了解如何拦截 SDK 发起的请求，并统一添加额外的逻辑。
- [泛化调用](generic.md)，如何调用 SDK 尚未支持的 API（不建议使用此类 API，因为没有兼容性保证）

## 获取更多示例

### 基于场景的示例

SDK 提供了部分基于场景的示例，并提供了对应的资源销毁逻辑，可以点击以下链接查看源码：

- [批量创建云主机](../examples/uhost)
- [创建基于负载均衡器的两层架构](../examples/two-tier)，ULB + UHost
