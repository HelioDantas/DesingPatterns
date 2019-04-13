<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 12/04/2019
 * Time: 11:49
 */

$app->get('/', \App\Controllers\HomeController::class . ':home');

$app->get('/home', \App\Controllers\HomeController::class . ':home');

$app->get('/injecaoDepenciaConstructor', \App\Controllers\HomeController::class . ':injectotPorDependeciaPorConstructor');

$app->post('/factory', \App\Controllers\HomeController::class . ':factoryMethod');

$app->get('/mortalKombat', \App\Controllers\HomeController::class . ':mortalKombat');

$app->get('/carrosAbstractfactory', \App\Controllers\HomeController::class . ':carrosAbstractfactory');

$app->post('/carroAbstractfactory', \App\Controllers\HomeController::class . ':carroAbstractfactory');