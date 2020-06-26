<?php
//view request the model to fetch data from the database

class UsersView extends Users
{
    public function showUser($name)
    {
        $results = $this->getUser($name);

        echo "full name: " . $results[0]['first_name'] . " " . $results[0]['last_name'] . " email: " . $results[0]['mail'];
    }
}
