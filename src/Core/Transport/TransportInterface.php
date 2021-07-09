<?php


namespace UCloud\Core\Transport;

use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

interface TransportInterface
{
    public function invoke(Request $req): Response;
}
