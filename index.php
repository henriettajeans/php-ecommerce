<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

$pdo = require_once __DIR__ . '/database/connect.php';

//Subscription MVC
require_once __DIR__ . '/model/itemModel.php';
$itemModel = new subscriptionModel($pdo);

//User MVC

//Customer MVC

//Views

//Routes
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/view/subscriptionView':
        require __DIR__ . '/view/homeView.php';
    case '/view/subscriptionView':
        require __DIR__ . '/view/subscriptionView.php';
}

include 'view/partials/header.php';
?>

<link rel="stylesheet" href="view/partials/header.css">

<?php
include 'view/partials/footer.php';

?>