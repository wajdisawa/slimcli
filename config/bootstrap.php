<?php
/*
 * Wajdi AlSawafta <wajdee.sawaf@gmail.com>
 * THIS FILE IS PART OF A PRIVATE PROJECT slimcli
 * @copyright MIT 2020
 */

use Slim\App;

$containerBuilder = new DI\ContainerBuilder();
$containerBuilder->useAutowiring(true);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions(__DIR__ . '/container.php');
$container =  $containerBuilder->build();
$app = $container->get(App::class);
$app->addErrorMiddleware(true,true,true);
return $app;
