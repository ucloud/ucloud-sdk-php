# 请求中间件

了解如何拦截 SDK 发起的请求，并统一添加额外的逻辑。

UCloud SDK 为请求提供了请求中间件的特性。

该特性允许在 请求/响应 的生命周期中添加自定义的逻辑。

例如，Client 级别的中间件，可以拦截参数/响应字典:

```php
use UCloud\Core\Middleware\Context;
use UCloud\Core\Middleware\Middleware;
use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

class LogMiddleware extends Middleware
{
    public function handleRequest(Context $ctx): Request
    {
        $req = $ctx->getRequest();
        $logger = $ctx->getConfig()->getLogger();
        if ($logger != null) {
            $logger->info(sprintf("[request] %s", json_encode($req->toArray())));
        }
        return $req;
    }

    public function handleResponse(Context $ctx): Response
    {
        $resp = $ctx->getResponse();
        $logger = $ctx->getConfig()->getLogger();
        if ($logger != null) {
            $body = $resp->toArray();
            $logger->info(sprintf("[response: %s] %s", $resp->getRequestId(), json_encode($body)));
        }
        return $resp;
    }

    public function handleException(Context $ctx)
    {
        $e = $ctx->getException();
        $logger = $ctx->getConfig()->getLogger();
        if ($logger != null) {
            $logger->error(sprintf("[response: %s] %s Error: %s", $e->getRequestId(), $e->getType(), $e->getMessage()));
        }
    }
}
```
