<?php
/*
 * Wajdi AlSawafta <wajdee.sawaf@gmail.com>
 * THIS FILE IS PART OF A PRIVATE PROJECT slimcli
 * @copyright MIT 2020
 */

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Slim\App;
use Slim\Factory\AppFactory;

return [
    'commandRegistry' => static function () {
        return require __DIR__ . '/command.php';
    },

    App::class => static function (ContainerInterface $container) {
        AppFactory::setContainer($container);
        return AppFactory::create();
    },
    ResponseFactoryInterface::class => static function (ContainerInterface $container) {
        return $container->get(App::class)->getResponseFactory();
    },
];

