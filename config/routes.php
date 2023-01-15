<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

use App\Controller\AdminController;
use App\Controller\PermissionController;
use App\Middleware\JwtMiddleware;
use Hyperf\HttpServer\Router\Router;

// Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});


Router::addGroup('/admin', function ()
{
    Router::post('/login', [AdminController::class, 'login']);
    Router::post('/logout', [AdminController::class, 'logout']);

    Router::addGroup('', function (){
        Router::get('/get-user-info', [AdminController::class, 'info']);
        Router::get('/get-menu', [PermissionController::class, 'get-menu']);
    }, [
        'middleware' => [JwtMiddleware::class]
    ]);
});