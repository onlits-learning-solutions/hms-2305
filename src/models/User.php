<?php

namespace Hostel\User;

class User
{
    public static function authenticate(array $credentials)
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $user_id = $credentials['user_id'];
        $password = $credentials['password'];

        $sql = "SELECT user_id FROM user WHERE user_id='$user_id' AND password=SHA1('$password')";

        $result = $connection->query($sql);

        $connection->close();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}