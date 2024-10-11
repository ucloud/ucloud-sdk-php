<?php

use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;

class DefaultLoggerPsrLogV3 extends AbstractLogger implements LoggerInterface
{
    public function log(
        $level,
        string|\Stringable $message,
        array $context = []
    ): void {
        $line = $level . " " . $message;
        if (!empty($context)) {
            $line = " " . json_encode($context, JSON_PRETTY_PRINT);
        }
        echo $line . "\n";
    }
}

class_alias("DefaultLoggerPsrLogV3", "UCloud\Core\Logger\DefaultLogger");
