<?php

declare(strict_types=1);

namespace App\Repository;

use \PDO;
use App\Config\Database;

abstract class Repository
{
    protected PDO $connection;

    public function __construct(Database $database)
    {
        $this->connection = $database->getConnection();
    }
}
