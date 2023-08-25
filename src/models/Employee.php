<?php

namespace Hostel\Employee;

class Employee
{
    private $connection = null;

    public function __construct()

    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }
    public function index()
    {
        $sql = "SELECT * FROM Employee";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function create($Employee)
    {
        $name = $Employee['name'];
        $gender = $Employee['gender'];
        $date_of_birth = $Employee['date_of_birth'];
        $contact_no = $Employee['contact_no'];
        $email = $Employee['email'];
        $designation = $Employee['designation'];
        $fathers_name = $Employee['fathers_name'];
        $sql = "INSERT INTO Employee(name, gender, date_of_birth, contact_no, email, designation, fathers_name) VALUES('$name', '$gender', '$date_of_birth', '$contact_no', '$email', '$designation', '$fathers_name')";
        $this->connection->query($sql);
        header("location:Employee.php");
    }

    public function details(int $employee_id)
    {
        $sql = "SELECT * FROM Employee WHERE Employee_Id=$employee_id";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    }

    public function delete(int $Employee_id)
    {
        $sql = "DELETE FROM Employee WHERE employee_id=$Employee_id";
        $this->connection->query($sql);
        header("location:Employee.php");
    }

    public function edit($Employee)
    {
        $employee_id = $Employee['employee_id'];
        $name = $Employee['name'];
        $gender = $Employee['gender'];
        $date_of_birth = $Employee['date_of_birth'];
        $contact_no = $Employee['contact_no'];
        $email = $Employee['email'];
        $designation =$Employee['designation'];
        $fathers_name=$Employee['fathers_name'];

        $sql = "UPDATE Employee SET name='$name', gender='$gender', date_of_birth='$date_of_birth', contact_no='$contact_no', email='$email', designation='$designation', fathers_name='$fathers_name' WHERE employee_id=$employee_id";
        $this->connection->query($sql);
        header("location:Employee.php");
    }

    public function count_of_Employees()
    {
        $sql = "SELECT COUNT(id) FROM Employee";
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
