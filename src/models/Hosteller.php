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
        $sql = "SELECT * FROM hosteller";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function create($Hosteller)
    {
        $name = $Hosteller['name'];
        $gender = $Hosteller['gender'];
        $date_of_birth = $Hosteller['date_of_birth'];
        $contact_no = $Hosteller['contact_no'];
        $email = $Hosteller['email'];
        $fathers_name = $Hosteller['fathers_name'];
        $sql = "INSERT INTO Hosteller(name, gender, date_of_birth, contact_no, email,fathers_name) VALUES('$name', '$gender', '$date_of_birth', '$contact_no', '$email','$fathers_name')";
        $this->connection->query($sql);
        header("location:hosteller.php");
    }

    public function details(int $id)
    {
        $sql = "SELECT * FROM Hosteller WHERE  hosteller_id=$id";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();          
        }
        return null;
    }

    public function edit($Hosteller)
    {
        $Hosteller_id = $Hosteller['hosteller_id'];
        $name = $Hosteller['name'];
        $gender = $Hosteller['gender'];
        $date_of_birth = $Hosteller['date_of_birth'];
        $contact_no = $Hosteller['contact_no'];
        $email = $Hosteller['email'];
        $fathers_name=$Hosteller['fathers_name'];

        $sql = "UPDATE Hosteller SET name='$name', gender='$gender', date_of_birth='$date_of_birth', contact_no='$contact_no', email='$email',fathers_name='$fathers_name' WHERE Hosteller_id=$Hosteller_id";
        $this->connection->query($sql);
        header("location:hosteller.php");
    }

    public function delete(int $Hosteller_id)
    {
        $sql = "DELETE FROM Hosteller WHERE hosteller_id=$Hosteller_id";
        $this->connection->query($sql);
        header("location:hosteller.php");
    }

    public function count_of_Hostellers()
    {
        $sql = "SELECT COUNT(id) FROM hosteller";
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
