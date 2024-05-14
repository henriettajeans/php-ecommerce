<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

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
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/view/homeView.php';
        break;

    default:
        require __DIR__ . '/view/subscriptionView.php';
        break;

    case '/contact':
        require __DIR__ . '/view/contact.php';
        break;

        // default:
        //     http_response_code(404);
        //     require __DIR__ . '/view/404.php';
        //     break;
}


?>

<link rel="stylesheet" href="view/partials/header.css">

<?php
include 'view/partials/footer.php';

?>