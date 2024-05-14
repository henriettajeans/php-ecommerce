<?php

class CustomerModel extends Database
{

    protected $table = "customers";

    public function getCustomers()
    {
        return $this->getAll($this->table);
    }

    public function getCustomerById($id)
    {
        try {
            $query = "SELECT * FROM $this->table  WHERE id = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Could not get customer by id (customerModel) " . $e->getMessage();
        }
    }

    public function addNewCustomer(string $name, string $type, string $description, int $price,)
    {
        try {
            $query = "INSERT INTO $this->table (`name`, `type`,  `description`, `price` ) VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$name, $type, $description, $price]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Unable to add a new customer (customerModel) " . $e->getMessage();
        }
    }

    public function updateCustomer(string $name, string $type, string $description, int $price, string $soldDate, int $subscriptionId,)
    {
        try {
            $query = "UPDATE $this->table SET  name=?, type=?, description=?, price=?, sold_date = ?  WHERE id = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$name, $type, $description, $price, $soldDate, $subscriptionId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Unable to update customer (customerModel) " . $e->getMessage();
        }
    }
}
