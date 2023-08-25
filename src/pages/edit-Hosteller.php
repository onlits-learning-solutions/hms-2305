<?php

use Hostel\Hosteller\Hosteller;
require "../autoload.php";

    $Hostellervar = new Hosteller();

    if(isset($_POST['submit'])) {
        $Hostellervar->edit($_POST);
    } else {
        $Hosteller = $Hostellervar->details($_GET['hosteller_id']);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hosteller</title>
    <link rel="stylesheet" href="../site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <a href="index.php">Home</a>
            <a href="admin.php">Admin Home</a>
            <a href="Hosteller.php">Hosteller</a>
        </aside>
        <main>
            <h1>Edit Hosteller</h1>
            <form action="" method="post">
                <label for="">ID</label>
                <input type="text" name="id" id="id" readonly value="<?= $Hosteller['id']?>">
                <label for="">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?= $Hosteller['first_name']?>">
                <label for="">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" value="<?= $Hosteller['middle_name']?>">
                <label for="">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?= $Hosteller['last_name']?>">
                <label for="">Contact Number</label>
                <input type="text" name="contact_no" id="contact_no" value="<?= $Hosteller['contact_no']?>" maxlength="10" minlength="10">
                <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>