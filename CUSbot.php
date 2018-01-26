<?php
require_once __DIR__ . '/vendor/autoload.php';
use MonologLogger;
use MonologHandlerLogglyHandler;
use MonologFormatterLogglyFormatter;

$log = new Logger('appName');
$log->pushHandler(new LogglyHandler('TOKEN/tag/monolog', Logger::INFO));

$log->addWarning('test logs to loggly');
?>
    