<?php

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

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
