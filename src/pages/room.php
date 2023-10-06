<?php
require "../autoload.php";

use Hostel\room\room;

$room = new room();
$rooms = $room->index();
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
                <h1>List of rooms</h1>
                <a href="new-room.php" class="btn btn-primary m-3">New room</a>
                <?php
                if ($rooms != null) {
                ?>
                    <table class="table" cellspacing="0">
                        <tr>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($rooms as $room) {
                        ?>
                            <tr>
                                <td><?= $room['room_no'] ?></td>
                                <td><?= $room['room_type'] ?></td>
                                <td><a href="<?php echo 'edit-room.php?room_no=' . $room['room_no'] ?>">Edit</a></td>
                                <td><a href="<?php echo 'delete-room.php?room_no=' . $room['room_no'] ?>">Delete</a></td>
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