<?php

require('user.php');
require('servers.php');
require('plan.php');


?>

<html lang="en">

<head>
    <title>PHP OOP</title>

</head>

<body>

    <div>
        <h2>Run Cloud Pricing</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <label>username: </label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? '') ?>">
            <div>
                <?php
                $subButton = false;
                if (isset($_POST['username'])) {
                    // validate entries

                    $server_1 = new Server('Server 1', '192.168.0.1', 'fail');

                    $server_2 = new Server('Server 2', '192.168.0.2', 'fail');
                    $name = htmlspecialchars($_REQUEST['username']);

                    if (empty($name)) {
                        echo "Name is Empty";
                    } else {

                        $subButton = true;
                        echo $name . '<br>';

                        echo $server_1->name . '<br>';
                        echo $server_1->ipAddress . '<br>';
                        echo $server_1->status . '<br>' . '<br>';

                        echo $server_2->name . '<br>';
                        echo $server_2->ipAddress . '<br>';
                        echo $server_2->status . '<br>' . '<br>';
                    }
                }
                ?>
                <div>

                    <?php if (isset($_POST['subbasic'])) {

                        $basicplan = new BasicPlan('Server 1', '192.168.0.1', 'success');
                        $user = new User();
                        $user->subscribe($basicplan);
                        $user->connectServer($server_1);
                    } elseif (isset($_POST['subpro'])) {


                        $proplan = new ProPlan('Server 2', '192.168.0.2', 'success');
                        $user = new User();
                        $user->subscribe($proplan);
                        $user->connectServer($server_2);
                    } elseif (isset($_POST['unsub'])) {

                        $proplan = new ProPlan('Server 2', '192.168.0.2', 'fail');
                        $user = new User();
                        $user->subscribe($proplan);
                        $user->connectServer($server_2);
                    }
                    ?>

                </div>

                <div>

                </div>
                <input type="submit" value="submit" name="submit">
                <input type="submit" value="subbasic" name="subbasic">
                <input type="submit" value="subpro" name="subpro">
                <input type="submit" value="unsub" name="unsub">

        </form>
    </div>

</body>

</html>