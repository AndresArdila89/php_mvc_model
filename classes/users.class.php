<?php

//model

class Users extends Dbh
{
    protected function getUser($name)
    {
        $sql = "SELECT * FROM users WHERE first_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt -> execute([$name]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($firstName, $lastName, $mail)
    {
        $sql = "INSERT INTO users(first_name,last_name,mail) VALUES(?,?,?)";
        $stmt = $this ->connect()->prepare($sql);
        $stmt->execute([$firstName,$lastName,$mail]);

        return 'User Added Succesfully';
    }
}
