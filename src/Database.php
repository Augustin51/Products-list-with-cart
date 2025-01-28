<?php

namespace App;

use PDO;
use PDOException;
abstract class Database
{
    private $pdo;
     
     
     public function __construct() {
         // Configuration de la base de données
          $host = $_ENV['MYSQL_DB_HOST'];
          $dbname = $_ENV['MYSQL_DB_NAME'];
          $username = $_ENV['MYSQL_DB_USER'];
          $password = $_ENV['MYSQL_DB_PASSWORD'];

          try {
               $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
               $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch (PDOException $e) {
               die("Erreur de connexion à la base de données : " . $e->getMessage());
          }
     }
     
     public function getConnection()
     {
          return $this->pdo;
     }
}