<?php

//Routes
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/homeView.php';
        break;

    default:
        require __DIR__ . '/subscriptionView.php';
        break;

    case '/contact':
        require __DIR__ . '/contact.php';
        break;

        // default:
        //     http_response_code(404);
        //     require __DIR__ . '/view/404.php';
        //     break;
}
