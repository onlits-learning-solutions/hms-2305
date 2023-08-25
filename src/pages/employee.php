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
                <h1>List of Employees</h1>
                <a href="new-Employee.php" class="btn btn-primary m-3">New Employee</a>
                <?php
                if ($Employees != null) {
                ?>
                    <table class="table" cellspacing="0">
                        <tr>
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Father's Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($Employees as $Employee) {
                        ?>
                            <tr>
                                <td><?= $Employee['employee_id'] ?></td>
                                <td><?= $Employee['name'] ?></td>
                                <td><?= $Employee['gender'] ?></td>
                                <td><?= $Employee['date_of_birth'] ?></td>
                                <td><?= $Employee['contact_no'] ?></td>
                                <td><?= $Employee['email'] ?></td>
                                <td><?= $Employee['designation'] ?></td>
                                <td><?= $Employee['fathers_name'] ?></td>
                                <td><a href="<?php echo 'edit-Employee.php?employee_id=' . $Employee['employee_id'] ?>">Edit</a></td>
                                <td><a href="<?php echo 'delete-Employee.php?employee_id=' . $Employee['employee_id'] ?>">Delete</a></td>
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