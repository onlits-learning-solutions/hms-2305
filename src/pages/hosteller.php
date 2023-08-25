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
                <a href="new-Hpsteller.php" class="btn btn-primary m-3">New Hosteller</a>
                <?php
                if ($Hostellers != null) {
                ?>
                    <table class="table" cellspacing="0">
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last name</th>
                            <th>Contact Number</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($Hostellers as $Hosteller) {
                        ?>
                            <tr>
                                <td><?= $Hosteller['id'] ?></td>
                                <td><?= $Hosteller['first_name'] ?></td>
                                <td><?= $Hosteller['middle_name'] ?></td>
                                <td><?= $Hosteller['last_name'] ?></td>
                                <td><?= $Hosteller['contact_no'] ?></td>
                                <td><a href="<?php echo 'edit-Hosteller.php?id=' . $Hosteller['id'] ?>">Edit</a></td>
                                <td><a href="<?php echo 'delete-Hosteller.php?id=' . $Hosteller['id'] ?>">Delete</a></td>
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