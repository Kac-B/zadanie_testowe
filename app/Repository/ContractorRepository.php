<?php

declare(strict_types=1);

namespace App\Repository;

use \PDO;

class ContractorRepository extends Repository
{
    private $table = 'emsi_contractor';

    public function findAll(): ?array
    {
        $statement = $this->connection->query("SELECT * FROM $this->table WHERE status = 1 ORDER BY id");

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOne(int $id): ?array
    {
        $statement = $this->connection->prepare("SELECT * FROM $this->table WHERE id = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function save(array $data): ?int
    {
        $query = "
            INSERT INTO $this->table (`nip`, `regon`, `name`, `is_vat`, `street`, `number_house`, `number_flat`) 
            VALUES (:nip, :regon, :name, :is_vat, :street, :number_house, :number_flat);
        ";

        $data = [
            'nip' => $data['nip'],
            'regon' => $data['regon'],
            'name' => $data['name'],
            'is_vat' => $data['is_vat'],
            'street' => $data['street'],
            'number_house' => $data['number_house'],
            'number_flat' => $data['number_flat'],
        ];

        try {
            $this->connection->prepare($query)->execute($data);

            return (int) $this->connection->lastInsertId();
        } catch (\Exception $ex) {
            //TODO: prepare logger

            return null;
        }
    }

    public function update(array $data): bool
    {
        $query = "
            UPDATE $this->table SET 
                nip=:nip, 
                regon=:regon, 
                name=:name, 
                is_vat=:is_vat, 
                street=:street, 
                number_house=:number_house, 
                number_flat=:number_flat
            WHERE id=:id
        ";

        $data = [
            'id' => $data['id'],
            'nip' => $data['nip'],
            'regon' => $data['regon'],
            'name' => $data['name'],
            'is_vat' => $data['is_vat'],
            'street' => $data['street'],
            'number_house' => $data['number_house'],
            'number_flat' => $data['number_flat'],
        ];

        try {
            $this->connection->prepare($query)->execute($data);

            return true;
        } catch (\Exception $ex) {
            //TODO: prepare logger

            return false;
        }
    }

    public function remove(int $id): bool
    {
        $query = "UPDATE $this->table SET status=0 WHERE id=:id";

        try {
            $this->connection->prepare($query)->execute(['id' => $id]);

            return true;
        } catch (\Exception $ex) {
            //TODO: prepare logger

            return false;
        }
    }
}
