<?php
use Hostel\Allocation\Allocation;
require '../autoload.php';

$Allocationvar =new Allocation();
$Allocationvar->delete($_GET['allocation_id']);
