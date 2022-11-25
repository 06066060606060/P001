<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/index.html';
        break;
    case '' :
        require __DIR__ . '/index.html';
        break;
    case '/contact' :
        require __DIR__ . '/post.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}