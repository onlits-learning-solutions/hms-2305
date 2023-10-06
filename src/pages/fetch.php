<?php

require '../autoload.php';

use Hostel\Hosteller\Hosteller;
use Hostel\Room\Room;

if($_GET['type']=='room') {
    $roomob = new Room();
    $room = $roomob->details($_GET['id']);
    $room = json_encode($room);
    echo $room;
} elseif($_GET['type']=='hosteller') {
    $hostellerob = new Hosteller();
    $hosteller = $hostellerob->details($_GET['id']);
    $hosteller = json_encode($hosteller);
    echo $hosteller;
}