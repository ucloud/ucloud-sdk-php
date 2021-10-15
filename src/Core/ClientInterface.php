<?php

namespace UCloud\Core;

use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

interface ClientInterface
{
    public function invoke(Request $req);
}
