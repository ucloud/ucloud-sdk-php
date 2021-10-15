<?php


namespace UCloud\Core;

use UCloud\Core\Middleware\Context;
use UCloud\Core\Middleware\Middleware;
use UCloud\Core\Request\Request;

class CredentialMiddleware extends Middleware
{
    public function handleRequest(Context $ctx)
    {
        $req = $ctx->getRequest();
        $cred = $ctx->getCredential();
        return new Request($cred->sign($req->toArray()));
    }
}
