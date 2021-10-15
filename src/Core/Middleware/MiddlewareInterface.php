<?php

namespace UCloud\Core\Middleware;

use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

interface MiddlewareInterface
{
    public function handleRequest(Context $ctx);

    public function handleResponse(Context $ctx);

    public function handleException(Context $ctx);
}
