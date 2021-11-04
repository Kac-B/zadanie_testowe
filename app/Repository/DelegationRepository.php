<?php

declare(strict_types=1);

namespace App\Repository;

use \PDO;

class DelegationRepository extends Repository
{
    private $table = 'emsi_delegations';

    public function findAll(): ?array
    {
        $statement = $this->connection->query("SELECT * FROM $this->table");

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
