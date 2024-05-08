<?php

class subscriptionModel extends Database
{

    protected $table = "subscription-plans";



    public function getAllSubscriptions()
    {
        return $this->getAll($this->table);
    }

    public function getOneSubscription($id)
    {
        try {
            $query = "SELECT * FROM $this->table  WHERE id = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Kunde inte hämta prenumerationsplanen (subscriptionModel) " . $e->getMessage();
        }
    }

    public function addNewSubscription(string $name, string $type, string $description, int $price,)
    {
        try {
            $query = "INSERT INTO $this->table (`name`, `type`,  `description`, `price` ) VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$name, $type, $description, $price]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Kunde inte hämta lägga till en prenumerationsplan (subscriptionModel) " . $e->getMessage();
        }
    }

    public function updateOneSubscription(string $name, string $type, string $description, int $price, string $soldDate, int $subscriptionId,)
    {
        try {
            $query = "UPDATE $this->table SET  name=?, type=?, description=?, price=?, sold_date = ?  WHERE id = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$name, $type, $description, $price, $soldDate, $subscriptionId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Kunde inte hämta lägga till en prenumerationsplan (subscriptionModel) " . $e->getMessage();
        }
    }
}