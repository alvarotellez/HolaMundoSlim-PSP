<?php
/**
 * Created by PhpStorm.
 * User: alvarotellez
 * Date: 20/12/16
 * Time: 16:57
 */
//With default settings
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function($request, $response, $args) {
    echo 'Hello world!';
});

$app->run();