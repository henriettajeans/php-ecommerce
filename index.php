<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

$pdo = require_once __DIR__ . '/database/connect.php';

include 'view/partials/header.php';
?>

<link rel="stylesheet" href="view/partials/header.css">

<?php
include 'view/partials/footer.php';

?>