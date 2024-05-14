<?php

require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'Invalid request when making a purchase (customerPortal)';
    exit;
}

$return_url = $_ENV['DOMAIN'];



$checkout_session = \Stripe\Checkout\Session::create([
    'success_url' => $domain_url . '/success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => $domain_url . '/canceled.php',
    'mode' => 'subscription',
    // 'automatic_tax' => ['enabled' => true],
    'line_items' => [[
        'price' => $_POST['priceId'],
        'quantity' => 1,
    ]]
]);
