<?php
include '/partials/header.php';

$json = file_get_contents('/model/subscriptionPlans.json');
$json_data = json_decode($json, true);
// print_r($json_data);
?>

<h2>Subscription Plans/h2>

    <table>
        <tr>
            <th>Plan</th>
            <th>Features</th>
            <th>Price</th>
            <th>Subscribe</th>
        </tr>
        <tr>
            <td>Basic</td>
            <td>Feature 1, Feature 2</td>
            <td>$10/month</td>
            <td><button onclick="subscribe('basic')">Subscribe</button></td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>Feature 1, Feature 2, Feature 3</td>
            <td>$20/month</td>
            <td><button onclick="subscribe('medium')">Subscribe</button></td>
        </tr>
        <tr>
            <td>Premium</td>
            <td>Feature 1, Feature 2, Feature 3, Feature 4</td>
            <td>$30/month</td>
            <td><button onclick="subscribe('premium')">Subscribe</button></td>
        </tr>
    </table>
    include '/partials/footer.php';
    ?>