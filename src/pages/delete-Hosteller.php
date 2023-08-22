<?php

use Hostel\Hosteller\Hosteller;
require "../autoload.php";

$Hostellervar = new Hosteller();
$Hostellervar->delete($_GET['id']);