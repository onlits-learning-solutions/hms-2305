<?php

namespace Hostel\Hosteller;

class Hosteller
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public function index()
    {
        $sql = "SELECT * FROM Hosteller";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function create($Hosteller)
    {
        $first_name = $Hosteller['first_name'];
        $middle_name = $Hosteller['middle_name'];
        $last_name = $Hosteller['last_name'];
        $contact_no = $Hosteller['contact_no'];
        $sql = "INSERT INTO Hosteller(first_name, middle_name, last_name, contact_no) VALUES('$first_name', '$middle_name', '$last_name', '$contact_no')";
        $this->connection->query($sql);
        header("location:Hosteller.php");
    }

    public function details(int $id)
    {
        $sql = "SELECT * FROM Hosteller WHERE id=$id";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();          
        }
        return null;
    }

    public function edit($Hosteller)
    {
        $id = $Hosteller['id'];
        $first_name = $Hosteller['first_name'];
        $middle_name = $Hosteller['middle_name'];
        $last_name = $Hosteller['last_name'];
        $contact_no = $Hosteller['contact_no'];
        $sql = "UPDATE Hosteller SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', contact_no='$contact_no' WHERE id=$id";
        $this->connection->query($sql);
        header("location:Hosteller.php");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Hosteller WHERE id=$id";
        $this->connection->query($sql);
        header("location:Hosteller.php");
    }

    public function count_of_Hostellers()
    {
        $sql = "SELECT COUNT(id) FROM Hosteller";
        $result = $this->connection->query($sql);
        if($result->num_rows > 0)
            return $result->fetch_array();
        return null;
    }

    public function ___descturct()
    {
        $this->connection->close();
    }
}
