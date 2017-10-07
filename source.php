<?php

/**
 * If you are not using Composer, you need to load Slim
 * Framework with your own PSR-4 autoloader.
 */
require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
    $response->write("Welcome to Slim!");
    return $response;
});

$app->get('/hello[/{name}]', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
})->setArgument('name', 'World!');

$app->run();



/*
aaaaaaa
aaa
aaaa
aaa



as


asdfasdfaaa
sadfasfaaaa


asdfasdf


asdfasdfas
a
sdf
as
df
as
df
asd
fasd

