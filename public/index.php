<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Core\Route;

Route::add('/', 'Front\HomeController@index');
Route::add('example', 'Front\ExampleController@index');
Route::add('tasks', 'Front\TaskController@index');

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($uri === '') {
    $uri = '/';
}

Route::dispatch($uri);