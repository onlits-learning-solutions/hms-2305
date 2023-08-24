<?php
use Hostel\Employee\Employee;
require '../autoload.php';

$Employeevar =new Employee();
$Employeevar->delete($_GET['id']);
