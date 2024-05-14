<?php

$json = file_get_contents('/Applications/MAMP/htdocs/php-ecommerce/view/models/subscriptionPlans.json');
// $json_data = json_decode($json, true);

// $json = require __DIR__ . '/models/subscriptionPlans.json';

if (($json)) {
    // $filename = $json;
    // $data = file_get_contents($json); //data read from json file

    //decode the data
    $data = json_decode($json);
    // print_r($data);
    $message = "<h3 class='text-success'>JSON file data</h3>";
} else {
    $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}
?>

<h2>Subscription Plans</h2>

<!-- <table>
    <tr>
        <th>Plan</th>
        <th>Start</th>
        <th>Medium</th>
        <th>Advanced</th>
    </tr>
    <tr>
        <td>Basic</td>
        <td>Feature 1</td>
        <td>$10/month</td>
        <td><button onclick="subscribe('basic')">Subscribe</button></td>
    </tr>
    <tr>
        <td>Medium</td>
        <td>Feature 1</td>
        <td>$20/month</td>
        <td><button onclick="subscribe('medium')">Subscribe</button></td>
    </tr>
    <tr>
        <td>Premium</td>
        <td>Feature 1</td>
        <td>$30/month</td>
        <td><button onclick="subscribe('premium')">Subscribe</button></td>
    </tr>
</table> -->

<?php
if (isset($message)) {
    echo $message;
} else {
    echo $message;
}


?>
<tbody>
    <tr>
        <p>DevCloud</p>
        <?php foreach ($data as $plan) { ?>
            <th><?= $plan->name; ?></th>
    </tr>
<?php
        }
        foreach ($data as $plan) { ?>
    <tr>
        <td> <?= $plan->repository; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->indexing; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->filter_names; ?> </td>
    <tr>
    </tr>
    <tr>
        <td> <?= $plan->filter_language; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->filter_fileextensions; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->filter_update; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->filter_creation; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->filter_tags; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->mailcatcher; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->email_limit; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->webmail; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->code_recipes; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->beta; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->recipes_limit; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->time_report; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->administrative; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->register_time; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->report_invoice; ?> </td>
    </tr>
    <tr>
        <td> <?= $plan->price; ?> </td>
    </tr>
    <tr><button> <?= $plan->onclick; ?> </button> </tr>
    </tr>
<?php
        }
?>

</tbody>