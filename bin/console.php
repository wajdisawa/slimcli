<?php
/*
 * Wajdi AlSawafta <wajdee.sawaf@gmail.com>
 * THIS FILE IS PART OF A PRIVATE PROJECT slimcli
 * @copyright MIT 2020
 */

declare(strict_types=1);

use Symfony\Component\Console\Application;

require __DIR__ . '/../vendor/autoload.php';
$container = (require __DIR__ . '/../config/bootstrap.php')->getContainer();
$app = new Application();
foreach ($container->get('commandRegistry')['commands'] as $class){
    $app->add($container->get($class));
}
$app->run();


