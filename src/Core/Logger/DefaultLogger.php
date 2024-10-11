<?php

namespace UCloud\Core\Logger;

use ReflectionMethod;

$logMethodReflection = new ReflectionMethod("Psr\Log\AbstractLogger", "log");
if (version_compare(PHP_VERSION, '8.0.0', '<')) {
    include "compatibility/DefaultLoggerPsrLogV1.php";
} else {
    if ($logMethodReflection->hasReturnType()) {
        include "compatibility/DefaultLoggerPsrLogV3.php";
    } else {
        include "compatibility/DefaultLoggerPsrLogV1.php";
    }
}
