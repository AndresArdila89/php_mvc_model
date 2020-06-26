<?php
//Controller
//send data to the  model so the model can store the data in the database

class UsersContr extends Users
{
    public function createUser($firstName, $lastName, $mail)
    {
        return  $this ->setUser($firstName, $lastName, $mail);
    }
}
