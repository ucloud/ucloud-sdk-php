<?php

use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;

class DefaultLoggerPsrLogV1 extends AbstractLogger implements LoggerInterface
{
    public function log($level, $message, array $context = [])
    {
        $line = $level . " " . $message;
        if (!empty($context)) {
            $line = " " . json_encode($context, JSON_PRETTY_PRINT);
        }
        echo $line . "\n";
    }
}

class_alias("DefaultLoggerPsrLogV1", "UCloud\Core\Logger\DefaultLogger");
