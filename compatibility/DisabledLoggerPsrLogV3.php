<?php

use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;

class DisabledLoggerPsrLogV3 extends AbstractLogger implements LoggerInterface
{
    public function log(
        $level,
        string|\Stringable $message,
        array $context = []
    ): void {
        // Do nothing
    }
}

class_alias("DisabledLoggerPsrLogV3", "UCloud\Core\Logger\DisabledLogger");
