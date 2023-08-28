<?php
use Hostel\room\room;
require '../autoload.php';

$roomvar =new room();
$roomvar->delete($_GET['room_no']);