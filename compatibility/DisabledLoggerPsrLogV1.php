<?php

use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;

class DisabledLoggerPsrLogV1 extends AbstractLogger implements LoggerInterface
{
    public function log($level, $message, array $context = [])
    {
        // Do nothing
    }
}

class_alias("DisabledLoggerPsrLogV1", "UCloud\Core\Logger\DisabledLogger");
