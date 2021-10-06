<?php
namespace ChainOfResponsibility;

require_once "../autoload.php";

$errorLogger = new ErrorLogger(LoggerAbstract::ERROR);
$fileLogger = new FileLogger(LoggerAbstract::DEBUG);
$consoleLogger = new ConsoleLogger(LoggerAbstract::INFO);

$errorLogger->setNextLogger($fileLogger);
$fileLogger->setNextLogger($consoleLogger);

$loggerChain = $errorLogger;

$loggerChain->logMessage(LoggerAbstract::INFO, "This is a debug level information\n");
$loggerChain->logMessage(LoggerAbstract::DEBUG, "This is a debug level information\n");
$loggerChain->logMessage(LoggerAbstract::ERROR, "This is a error level information\n");