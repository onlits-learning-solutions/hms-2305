<?php

use Hostel\Hosteller\Hosteller;
require "../autoload.php";

    $Hostellervar = new Hosteller();

    if(isset($_POST['submit'])) {
        $Hostellervar->edit($_POST);
    } else {
        $Hosteller = $Hostellervar->details($_GET['id']);
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
            <label for="">Hosteller ID</label>
                    <input type="text" name="hosteller_id" id="hosteller_id" readonly value="<?= $Hosteller['hosteller_id'] ?>">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" value="<?= $Hosteller['name'] ?>">
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="gender" value="<?= $Hosteller['gender'] ?>">
                    <label for="">Date of Birth</label>
                    <input type="text" name="date_of_birth" id="date_of_birth" value="<?= $Hosteller['date_of_birth'] ?>">
                    <label for="">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" value="<?= $Hosteller['contact_no'] ?>" maxlength="10" minlength="10">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" value="<?= $Hosteller['email'] ?>">
                    <label for="">Father's Name</label>
                    <input type="text" name="fathers_name" id="fathers_Name" value="<?= $Hosteller['fathers_name'] ?>">
                    <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>