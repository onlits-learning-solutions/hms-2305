<?php

use Hostel\Employee\Employee;

require '../autoload.php';

$Employeevar = new Employee();

if (isset($_POST['submit'])) {
    $Employeevar->edit($_POST);
} else {
    $Employee = $Employeevar->details($_GET['employee_id']);
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
                <h1>Edit Employee</h1>
                <form action="" method="post">
                    <label for="">Employee ID</label>
                    <input type="text" name="employee_id" id="employee_id" readonly value="<?= $Employee['employee_id'] ?>">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" value="<?= $Employee['name'] ?>">
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="gender" value="<?= $Employee['gender'] ?>">
                    <label for="">Date of Birth</label>
                    <input type="text" name="date_of_birth" id="date_of_birth" value="<?= $Employee['date_of_birth'] ?>">
                    <label for="">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" value="<?= $Employee['contact_no'] ?>" maxlength="10" minlength="10">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" value="<?= $Employee['email'] ?>">
                    <label for="">Designation</label>
                    <input type="text" name="designation" id="designation" value="<?= $Employee['designation'] ?>">
                    <label for="">Father's Name</label>
                    <input type="text" name="fathers_name" id="fathers_Name" value="<?= $Employee['fathers_name'] ?>">
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