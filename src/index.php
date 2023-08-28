<?php

use Hostel\User\User;

require 'models/User.php';
require 'env.php';

$result = User::authenticate($_POST);

$error_message = null;

if($_GET['error'] == 99)
{
    $error_message = "Invalid username or password! Please retry!";
}

if(isset($result)) {
    header('Location:pages/dashboard.php');
}else {
    header('Location:index.php?error=99');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .left-pane {
            padding: 20px;
        }

        .right-pane {
            padding: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="left-pane">

        </div>
        <div class="right-pane">
            <form action="" method="post">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" id="user_id">
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
                <button>Login</button>
                <label for="" id="error_message"><?= $error_message?></label>
            </form>
        </div>
    </div>
</body>
</html>