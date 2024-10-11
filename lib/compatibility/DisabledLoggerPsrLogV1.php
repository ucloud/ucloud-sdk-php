<?php

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class DisabledLoggerPsrLogV1 extends AbstractLogger implements LoggerInterface
{
    public function log($level, $message, array $context = [])
    {
        // Do nothing
    }
}

class_alias("DisabledLoggerPsrLogV1", "UCloud\Core\Logger\DisabledLogger");
