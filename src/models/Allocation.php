<?php

namespace Hostel\Allocation;

class Allocation
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    }

    public function index()
    {
        $sql = "SELECT * FROM allocation";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    } 

    public function details(string $allocation_id)
    {
        $sql = "SELECT * FROM allocation WHERE allocation_id='$allocation_id'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    } 
 
    public function create(array $allocation)
    {
        $room_no = $allocation['room_no'];
        $hosteller_id = $allocation['hosteller_id'];
        session_start();
        $employee_id = $_SESSION['user_id']=='root'?0:1;
        $sql = "INSERT INTO Allocation(date, room_no, hosteller_id, employee_id) VALUES(CURDATE(), '$room_no', '$hosteller_id', '$employee_id')";
        $this->connection->query($sql);
        header("location:Allocation.php");

    }
    public function edit(array $allocation): void
    {
    
        $allocation_id = $allocation['allocation_id'];
        $date = $allocation['date'];
        $room_no = $allocation['room_no'];
        $hosteller_id = $allocation['hosteller_id'];
        $employee_id = $allocation['employee_id'];
        $sql = "UPDATE allocation SET date='$date', room_no='$room_no', hosteller_id='$hosteller_id', employee_id='$employee_id' WHERE room_no='$room_no'";
        $this->connection->query($sql);
        header("location:allocation.php");
    }

    public function ___descturct()
    {
        $this->connection->close();
    }
}