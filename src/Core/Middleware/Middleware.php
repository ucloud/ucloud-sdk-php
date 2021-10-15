<?php


namespace UCloud\Core\Middleware;

use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

abstract class Middleware implements MiddlewareInterface
{
    public function handleRequest(Context $ctx)
    {
        return $ctx->getRequest();
    }

    public function handleResponse(Context $ctx)
    {
        return $ctx->getResponse();
    }

    public function handleException(Context $ctx)
    {
    }
}
