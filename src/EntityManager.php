<?php
namespace App;

use App\Database;
use PDO;
use PDOException;
class EntityManager extends Database {

    private $table;

    public function __construct($table) {
        parent::__construct();
        $this->table = $table;
    }

    public function findAll() {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $sql = "UPDATE " . $this->table . " SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key = '$value', ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE id = :id";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([':id' => $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([':id' => $id]);
    }

    public function create($data) {
        $sql = "INSERT INTO " . $this->table . "(";
        foreach ($data as $key => $value) {
            $sql .= "$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ") VALUES (";
        foreach ($data as $value) {
            $sql .= "'$value', ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";
        var_dump($sql);
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
    }

}