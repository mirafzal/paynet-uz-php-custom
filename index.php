<?php
/**
 * Created by PhpStorm.
 * User: yura_sultonov
 * Date: 5/24/19
 * Time: 12:04 AM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use services\PaynetService;

// Отправим HTTP-заголовка, paynet не принимает заголовку кроме text/xml
header("Content-Type: text/xml; charset=utf-8");

$context = stream_context_create([
    'ssl' => [
        // set some SSL/TLS specific options
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
        'ciphers' => "SHA1"
    ]
]);

$webService = new SoapServer(Constants::WSDL_URL, [
    'stream_context' => $context
]);
$webService->setObject(new PaynetService());
$webService->handle();