<?php

namespace Hostel\Room;

class Room
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public function index()
    {
        $sql = "SELECT * FROM room";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function create($room)
    {
        $room_no = $room['room_no'];
        $room_type = $room['room_type'];

        $sql = "INSERT INTO room(room_no,room_type) VALUES('$room_no', '$room_type')";
        $this->connection->query($sql);
        header("location:room.php");
    }

    public function details(int $room_no)
    {
        $sql = "SELECT * FROM room WHERE room_no=$room_no";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    } 

    public function delete(int $room_no)
    {
        $sql = "DELETE FROM room WHERE room_no=$room_no";
        $this->connection->query($sql);
        header("location:room.php");
    }

    public function edit($room)
    {
    
        $room_no = $room['room_no'];
        $room_type = $room['room_type'];
        $sql = "UPDATE room SET room_type='$room_type' WHERE room_no=$room_no";
        $this->connection->query($sql);
        header("location:room.php");
    }


    public function count_of_room()
    {
        $sql = "SELECT COUNT(id) FROM room";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_array();
        return null;
    }

    public function ___descturct()
    {
        $this->connection->close();
    }
}