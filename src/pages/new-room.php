<?php

use Hostel\Room\Room;

require '../autoload.php';

if (isset($_POST['submit'])) {
    $room = new Room();
    $room->create($_POST);
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
                <h1 id="main-content-heading">New room</h1>
                <form action="" method="post" style="margin-bottom: 50px;">
                    <label for="">room no</label>
                    <input type="text" name="room_no" id="room_no">
                    <label for="">room type</label>
                    <input type="text" name="room_type" id="room_type">
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