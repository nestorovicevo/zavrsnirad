<?php

class UsersDB
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
}
