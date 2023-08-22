<?php
require "../autoload.php";

use Hostel\Employee\Employee;

$Employee = new Employee();
$Employees = $Employee->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Employee</title>
    <link rel="stylesheet" href="../site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <?php require('sidebar.php') ?>
        </aside>
        <main>
            <h1>List of Employees</h1>
            <a href="new-Employee.php" class="btn btn-primary m-3">New Employee</a>
            <?php
            if ($Employees != null) {
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
                    foreach ($Employees as $Employee) {
                    ?>
                        <tr>
                            <td><?= $Employee['id'] ?></td>
                            <td><?= $Employee['first_name'] ?></td>
                            <td><?= $Employee['middle_name'] ?></td>
                            <td><?= $Employee['last_name'] ?></td>
                            <td><?= $Employee['contact_no'] ?></td>
                            <td><a href="<?php echo 'edit-Employee.php?id=' . $Employee['id'] ?>">Edit</a></td>
                            <td><a href="<?php echo 'delete-Employee.php?id=' . $Employee['id'] ?>">Delete</a></td>
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
        </main>
    </div>
</body>

</html>