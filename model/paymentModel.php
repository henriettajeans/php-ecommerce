<?php

class PaymentModel extends Database
{

    protected $table = "stripe-payments";

    public function getPayments()
    {
        return $this->getAll($this->table);
    }
    public function getPurchaseById($id)
    {
        try {
            $query = "SELECT * FROM $this->table  WHERE id = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Could not get the purchase by id (paymentModel) " . $e->getMessage();
        }
    }
    //Set purchase to id
}
