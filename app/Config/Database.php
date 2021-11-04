<?php

namespace App\Config;

use \PDO;

class Database
{
    private const HOST = '';
    private const DATABASE = '';
    private const USER = '';
    private const PASSWORD = '';

    private ?PDO $connection = null;

    public function getConnection(): PDO
    {
        if (!$this->connection) {
            $this->connectToDatabase();
        }

        return $this->connection;
    }

    public function connectToDatabase(): void
    {
        try {
            $dns = \sprintf("mysql:host=%s;dbname=%s;charset=UTF8", self::HOST, self::DATABASE);
            $this->connection = new PDO($dns, self::USER, self::PASSWORD);
        } catch (\Exception $ex) {
            echo $ex->getMessage(); // Can be added logger in future
        }
    }
}