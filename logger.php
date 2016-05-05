<?php

function logMessage($logLevel, $message)
{

    $currentDateTime = date('Y-m-d');
    $filename = "log-$currentDateTime.log";
    $handle = fopen($filename, 'a');
    $currentTime = date('h:i:s');

    $messageString = $currentDateTime . $currentTime . $logLevel . $message . PHP_EOL;

    fwrite($handle, $messageString);

fclose($handle);
}

function logInfo($message)
{
logMessage(" INFO", $message);
}

logInfo(" This is an info message");



function logError($message) 
{
logMessage(" ERROR", $message);
}

logError(" This is an Error message");




