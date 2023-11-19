<?php

use Hostel\User\User;

require 'models/User.php';
require 'env.php';

$error_message = null;

if (isset($_GET['error'])) {
    if ($_GET['error'] == 99)
        $error_message = "Invalid username or password! Please retry!";
    elseif($_GET['error'] == 199) {
        $error_message = "Invalid session! Please login!";
    }
}

if (isset($_POST['login'])) {
    $result = User::authenticate($_POST);

    if (isset($result)) {
        session_start();
        $_SESSION['user_id'] = $result['user_id'];
        header('Location:pages/dashboard.php');
    } else {
        header('Location:index.php?error=99');
    }
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
            margin-top: 100px;
            padding: 20px;
            background-color: lightblue;
        }

        label {
            display: block;
        }

        input {
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            display: block;
            padding: 5px;
            margin-bottom: 10px;
        }

        #error_message {
            color: red;
        }
        body{
          background-image: url("image.jpg"); 
          background-size: cover; 
      }


      h1{
        text-align: center;
        font-size: 50px;
        color: yellowgreen;
      }


    </style>
</head>

<body>
   <h1>Hostel Management System</h1>
    <div class="container">
        <div class="left-pane">

        </div>
        <div class="right-pane">
            <form action="" method="post">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" id="user_id">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button name="login">Login</button>
                <label for="" id="error_message"><?= $error_message ?></label>
            </form>
        </div>
    </div>
</body>

</html>