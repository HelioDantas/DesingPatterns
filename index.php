<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require __DIR__ . '/vendor/autoload.php';
use Slim\Views\PhpRenderer;
/*
if (PHP_SAPI == 'cli-server') {
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}*/


$app = new \Slim\App();
$container = $app->getContainer();

$container['renderer'] = function () {
    return new PhpRenderer(__DIR__.'/src/View/');
};


require __DIR__.'/src/Routes/WebRoutes.php';

$app->run();

