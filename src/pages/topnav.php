<?php
session_start();
if (!isset($_SESSION['user_id']))
    header('Location:../index?error=199');
?>

<div class="col-2">
    <div>
        <h1 style="background-color:brown;">Hostel Management System</h1>
    </div>
    <div>
        <?= $_SESSION['user_id']?>
    </div>
</div>