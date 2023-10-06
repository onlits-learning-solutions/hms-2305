<?php

use Hostel\Allocation\Allocation;

require '../autoload.php';

if (isset($_POST['submit'])) {
    $allocationob = new Allocation();
    $allocationob->create($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - New Allocation</title>
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
                <h1>New Allocation</h1> <br>
                <form action="" method="post" class="grid-col-2">
                    <div class="left">
                        <h3>Room Details</h3><br>
                        <label for="">Room no</label>
                        <input type="text" name="room_no" id="room_no" onblur="getRoom(this.value)">
                        <label for="">Room type</label>
                        <input type="text" name="room_type" id="room_type" readonly>
                        <button name="submit">Submit</button>
                    </div>
                    <div class="right">
                        <h3>Hosteller Details</h3><br>
                        <label for="">Hosteller ID</label>
                        <input type="text" name="hosteller_id" id="hosteller_id" onblur="getMember(this.value)">
                        <label for="">Hosteller name</label>
                        <input type="text" name="hosteller_name" id="hosteller_name" readonly>
                        <label for="">gender</label>
                        <input type="text" name="gender" id="gender" readonly>
                        <label for="">Date of Birth</label>
                        <input type="text" name="date_of_birth" id="date_of_birth" readonly>
                        <label for="">Contact Number</label>
                        <input type="text" name="contact_no" id="contact_no" maxlength="10" minlength="10" readonly>
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" readonly>
                        <label for="">Father's Name</label>
                        <input type="text" name="father's_name" id="father's_name" readonly>
                    </div>
                </form>

                <footer>
                    <?php require 'footer.php' ?>
                </footer>
            </div>
        </main>
    </div>
    <script>
        function getRoom(room_no) {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let room = JSON.parse(this.responseText);
                    document.getElementById('room_type').value = room.room_type;
                }
            };
            xhr.open("GET", "fetch.php?type=room&id=" + room_no);
            xhr.send();
        }

        function getMember(hosteller_id) {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let hosteller = JSON.parse(this.responseText);
                    document.getElementById('hosteller_name').value = hosteller.name;
                    document.getElementById('gender').value = hosteller.gender;
                    document.getElementById('date_of_birth').value = hosteller.date_of_birth;
                    document.getElementById('contact_no').value = hosteller.contact_no;
                    document.getElementById('email').value = hosteller.email;
                    document.getElementById('fathers_name').value = hosteller.fathers_name;
                }
            };
            xhr.open("GET", "fetch.php?type=hosteller&id=" + hosteller_id);
            xhr.send();
        }
    </script>
</body>

</html>