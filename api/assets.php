<?php

$file = $_GET['assets'];
if (str_ends_with($file, '.css')) {
    header('Content-type: text/css; charset: UTF-8');

    return require dirname(__DIR__).'/public/build/assets/'.basename($file);
} elseif (str_ends_with($file, '.js')) {
    header('Content-Type: application/javascript; charset: UTF-8');

    return require dirname(__DIR__).'/public/build/assets/'.basename($file);
} elseif (str_ends_with($file, '.json')) {
    header('Content-Type: application/json; charset: UTF-8');

    require __DIR__.'/../public/json/'.$file;
} elseif (str_ends_with($file, 'svg')) {
    header('Content-Type: image/svg+xml; charset: UTF-8');

    require __DIR__.'/../public/img/'.$file;
} elseif (str_ends_with($file, 'jpg')) {
    header('Content-Type: image/jpeg; charset: UTF-8');

    require __DIR__.'/../public/img/'.$file;
}
