<?php

use Hostel\Employee\Employee;

require '../autoload.php';

if (isset($_POST['submit'])) {
    $Employee = new Employee();
    $Employee->create($_POST);
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
                <h1 id="main-content-heading">New Employee</h1>
                <form action="" method="post" style="margin-bottom: 50px;">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="gender">
                    <label for="">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth">
                    <label for="">Contact Number</label>
                    <input type="text" name="contact_no" id="contact_no" maxlength="10" minlength="10">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="">Designation</label>
                    <input type="text" name="designation" id="designation">
                    <label for="">Father's Name</label>
                    <input type="text" name="fathers_name" id="fathers_name">
                    <button name="submit">Submit</button>
                </form>
                <footer class="footer">
                    <?php require 'footer.php' ?>
                </footer>
            </div>
        </main>
    </div>
</body>

</html>