<?php


namespace UCloud\Core;

use UCloud\Core\Middleware\Context;
use UCloud\Core\Middleware\Middleware;
use UCloud\Core\Request\Request;

class DefaultsMiddleware extends Middleware
{
    const FIELD_REGION = "Region";

    const FIELD_PROJECT_ID = "ProjectId";

    /**
     * inject default values and validate it
     *
     * @throws Exception\UCloudException
     */
    public function handleRequest(Context $ctx): Request
    {
        $req = $ctx->getRequest();
        $cfg = $ctx->getConfig();

        if (!$req->has(self::FIELD_REGION) && $cfg->getRegion() != "") {
            $req->set(self::FIELD_REGION, $cfg->getRegion());
        }

        if (!$req->has(self::FIELD_PROJECT_ID) && $cfg->getProjectId() != "") {
            $req->set(self::FIELD_PROJECT_ID, $cfg->getProjectId());
        }

        if ($req->loadMaxRetries() == 0) {
            $req->withMaxRetries($cfg->getMaxRetries());
        }

        if ($req->loadTimeout() == 0) {
            $req->withTimeout($cfg->getTimeout());
        }
        $req->validate();
        return $req;
    }
}
