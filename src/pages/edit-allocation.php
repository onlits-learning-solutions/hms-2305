<?php

use Hostel\allocation\allocation;
use Hostel\Room\Room;

require '../autoload.php';

$allocationvar = new allocation();
$roomvar = new Room;

if (isset($_POST['submit'])) {
    $allocationvar->edit($_POST);
} else {
    $allocation = $allocationvar->details($_GET['allocation_id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - Layout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <div class="top-nav">
            <?php require 'topnav.php' ?>
        </div>
        <main class="main">
            <div class="sidebar">
                <?php require 'sidebar.php'; ?>
            </div>
            <div class="main-content">
                <h1>Edit allocation</h1>
                <form action="" method="post">
                    <label for="">allocation id</label>
                    <input type="text" name="allocation_id" id="allocation_id" readonly value="<?= $allocation['allocation_id'] ?>">
                    <label for="">date</label>
                    <input type="text" name="date" id="date" value="<?= $allocation['date'] ?>">
                    <label for="">room no</label>
                    <input type="text" name="room_no" id="room_no" value="<?= $allocation['room_no'] ?>">
                    <label for="">Hosteller id</label>
                    <input type="text" name="hosteller id" id="hosteller id" value="<?= $allocation['hosteller_id'] ?>">
                    <label for="">employee_id </label>
                    <input type="text" name="employee id" id="employee id" value="<?= $allocation['employee_id'] ?>">
                    <button name="submit">Submit</button>
                </form>
                <footer>
                    <?php require 'footer.php' ?>
                </footer>
            </div>
        </main>
    </div>
</body>

</html>