<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

//Stripe integration
require 'vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
// $dotenv->load();

$pdo = require_once __DIR__ . '/database/connect.php';

//Header
include 'view/partials/header.php';

//Subscription MVC
// require_once __DIR__ . '/model/itemModel.php';
// $itemModel = new subscriptionModel($pdo);

//User MVC

//Customer MVC

//Views

//Routes
include 'view/routes.php'

?>

<link rel="stylesheet" href="view/partials/header.css">

<?php
include 'view/partials/footer.php';

?>