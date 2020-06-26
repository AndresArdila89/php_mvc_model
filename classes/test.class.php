<?php

class Test extends Dbh
{
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);

        while ($row = $stmt->fetch()) {
            echo $row['first_name'] . '<br>';
        }
    }

    public function getUsersStmt($firstName, $lastName)
    {
        $sql = "SELECT * FROM users WHERE first_name = ? AND last_name = ?";
        $stmt = $this ->connect()->prepare($sql);
        $stmt ->execute([$firstName,$lastName]);
        $names = $stmt-> fetchAll();

        return $names;
    }

    public function setUserStmt($firstName, $lastName, $mail)
    {
        $sql = "INSERT INTO users(first_name, last_name,mail) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute([$firstName,$lastName,$mail]);
    }
}
