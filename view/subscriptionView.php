<?php
include '/partials/header.php';

$json = file_get_contents('/model/subscriptionPlans.json');
$json_data = json_decode($json, true);

if (file_exists('/model/subscriptionPlans.json')) {
    $filename = '/model/subscriptionPlans.json';
    $data = file_get_contents($filename); //data read from json file
    print_r($data);
    $plans = json_decode($data);  //decode a data

    print_r($plans); //array format data printing
    $message = "<h3 class='text-success'>JSON file data</h3>";
} else {
    $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}
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

    <?php
    if (isset($message)) {
        echo $message;
    } else {
        echo $message;
    }


    ?>
    <tbody>
        <tr>
            <?php foreach ($plans as $plan) { ?>
                <th><?= $plan->name; ?></th>


        </tr>
    <?php
            }
            foreach ($plans as $plan) { ?>
        <tr>
            <td> <?= $plan->repository; ?> </td>
            <td> <?= $plan->indexing; ?> </td>
            <td> <?= $plan->filter_names; ?> </td>
            <td> <?= $plan->filter_language; ?> </td>
            <td> <?= $plan->filter_fileextensions; ?> </td>
            <td> <?= $plan->filter_update; ?> </td>
            <td> <?= $plan->filter_creation; ?> </td>
            <td> <?= $plan->filter_tags; ?> </td>
            <td> <?= $plan->mailcatcher; ?> </td>
            <td> <?= $plan->email_limit; ?> </td>
            <td> <?= $plan->webmail; ?> </td>
            <td> <?= $plan->code_recipes; ?> </td>
            <td> <?= $plan->beta; ?> </td>
            <td> <?= $plan->recipes_limit; ?> </td>
            <td> <?= $plan->time_report; ?> </td>
            <td> <?= $plan->administrative; ?> </td>
            <td> <?= $plan->register_time; ?> </td>
            <td> <?= $plan->report_invoice; ?> </td>
            <td> <?= $plan->price; ?> </td>
            <button> <?= $plan->onclick; ?> </button>

        <?php
            }
        ?>
        </tr>
    </tbody>
    <?php

    include '/partials/footer.php';
