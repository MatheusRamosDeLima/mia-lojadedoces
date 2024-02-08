<?php

namespace App\Models;

class DocesTable extends Mia {
    public function getAllDoces() {
        $query = $this->pdo->query('SELECT * FROM doces');
        $doces = $query->fetchAll();
        return $doces;
    }
    public function getDoceById(string $id) {
        $query = $this->pdo->query("SELECT * FROM doces WHERE id = '$id'");
        $doce = $query->fetchObject();
        return $doce;
    }
}