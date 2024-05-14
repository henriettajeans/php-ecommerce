<?php

require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'Invalid request when making a purchase (customerPortal)';
    exit;
}

$checkout_session = \Stripe\Checkout\Session::retrieve($_POST['sessionId']);
$customer_id = $checkout_session->customer;

$return_url = $_ENV['DOMAIN'];

$session = \Stripe\BillingPortal\Session::create([
    'customer' => $ustomer_id,
    'return_url' => $return_url,
]);
