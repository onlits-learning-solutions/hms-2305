<?php

use Hostel\Hosteller\Hosteller;

require '../autoload.php';

$Hosteller = new Hosteller();
$Hostellers = $Hosteller->index();
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
                <h1>List of Hostellers</h1>
                <a href="new-Hosteller.php" class="btn btn-primary m-3">New Hosteller</a>
                <?php
                if ($Hostellers != null) {
                ?>
                    <table class="table" cellspacing="0">
                        <tr>
                        <th>Hosteller Id</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Father's Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($Hostellers as $Hosteller) {
                        ?>
                            <tr>
                            <td><?= $Hosteller['hosteller_id'] ?></td>
                                <td><?= $Hosteller['name'] ?></td>
                                <td><?= $Hosteller['gender'] ?></td>
                                <td><?= $Hosteller['date_of_birth'] ?></td>
                                <td><?= $Hosteller['contact_no'] ?></td>
                                <td><?= $Hosteller['email'] ?></td>
                                <td><?= $Hosteller['fathers_name'] ?></td>
                                <td><a href="<?php echo 'edit-Hosteller.php?id=' . $Hosteller['hosteller_id'] ?>">Edit</a></td>
                                <td><a href="<?php echo 'delete-Hosteller.php?id=' . $Hosteller['hosteller_id'] ?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                <?php
                } else {
                    echo "</p>No Records found!</p>";
                }
                ?>
                <footer>
                    <?php require 'footer.php' ?>
                </footer>
            </div>
        </main>
    </div>
</body>

</html>