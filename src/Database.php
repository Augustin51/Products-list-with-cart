<?php

namespace App;

use PDO;
use PDOException;
abstract class Database
{
    private $pdo;
     
     
     public function __construct() {
// Configuration de la base de données
          $host = 'localhost';
          $dbname = 'mvc_database';
          $username = 'root';
          $password = '';
          
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