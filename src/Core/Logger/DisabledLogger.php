<?php


namespace UCloud\Core\Logger;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class DisabledLogger extends AbstractLogger implements LoggerInterface
{
    public function log($level, $message, array $context = [])
    {
        // Do nothing
    }
}
