<?php

class Database
{
    private PDO $connection;
    private string $dsn;
    private string $username;
    private string $password;


    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        try {
            $this->connection = new PDO($dsn, $username, $password);

        } catch (PDOException $e) {
            throw new \http\Exception\InvalidArgumentException($e->getMessage());
        }
    }

}