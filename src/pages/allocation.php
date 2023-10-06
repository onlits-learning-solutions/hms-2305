<?php

use Hostel\Allocation\Allocation;

require '../autoload.php';

$allocationob = new Allocation();
$allocations = $allocationob->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - Room Allocation</title>
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
                <h1>Room Allocation</h1>
                <a href="new-allocation.php">New Allocation</a>
                <?php If($allocations != null) {?>
                <table>
                    <thead>
                        <tr>
                            <th>Allocation ID</th>
                            <th>Date</th>
                            <th>Room No</th>
                            <th>Hosteller ID</th>
                            <th>Employee ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($allocations as $allocation) { ?>
                        <tr>
                            <td><?= $allocation['allocation_id'] ?></td>
                            <td><?= $allocation['date'] ?></td>
                            <td><?= $allocation['room_no'] ?></td>
                            <td><?= $allocation['hosteller_id'] ?></td>
                            <td><?= $allocation['employee_id'] ?></td>
                            <td><a href="<?php echo 'edit-allocation.php?allocation_id=' . $allocation['allocation_id'] ?>">Edit</a></td>
                             <td><a href="<?php echo 'delete-allocation.php?allocation_id=' . $allocation['allocation_id'] ?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
                <footer>
                    <?php require 'footer.php' ?>
                </footer>
            </div>
        </main>
    </div>
</body>

</html>