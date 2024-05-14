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

<?php
if (isset($message)) {
    echo $message;
} else {
    echo $message;
}
?>

<table>
    <tbody>

        <!-- <tr> -->
        <th>DevCloud</th>
        <?php foreach ($data as $plan) { ?>
            <th><?= $plan->name; ?></th>
            <!-- </tr> -->
        <?php
        }
        ?>



        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->repository; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->indexing; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>
                <td> <?= $plan->filter_names; ?> </td>
            <?php
            }
            ?>
            <!-- <tr> -->
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->filter_language; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->filter_fileextensions; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->filter_update; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->filter_creation; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->filter_tags; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->mailcatcher; ?> </td>
            <?php
            }
            ?>

        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->email_limit; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->webmail; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->code_recipes; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->beta; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->recipes_limit; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->time_report; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->administrative; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->register_time; ?> </td> <?php
                                                    }
                                                        ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->report_invoice; ?> </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Thing</td>
            <?php
            foreach ($data as $plan) { ?>

                <td> <?= $plan->price; ?> </td>
            <?php
            }
            ?>
        </tr>


        <!-- <tr>
            <?php
            foreach ($data as $plan) { ?>
                <button> <?= $plan->onclick; ?> </button>
            <?php
            }
            ?>
        </tr> -->


    </tbody>
</table>