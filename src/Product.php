<?php

namespace App;

use App\Database;
use PDO;

class Product extends Database
{
     
     public function getAll()
     {
          $sql = "SELECT * FROM products";
          $stmt = $this->getConnection()->prepare($sql);
          $stmt->execute();
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
     
     public function getById($id)
     {
          $sql = "SELECT * FROM products WHERE id = :id";
          $stmt = $this->getConnection()->prepare($sql);
          $stmt->bindParam(':id', $id);
          $stmt->execute();
          return $stmt->fetch(PDO::FETCH_ASSOC);
     }
     
     public function delete($id)
     {
          $sql = "DELETE FROM products WHERE id = :id";
          $stmt = $this->getConnection()->prepare($sql);
          $stmt->bindParam(':id', $id);
          return $stmt->execute();
     }
}