<?php

namespace UCloud\Core\Middleware;

use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

interface MiddlewareInterface
{
    public function handleRequest(Context $ctx): Request;

    public function handleResponse(Context $ctx): Response;

    public function handleException(Context $ctx);
}
