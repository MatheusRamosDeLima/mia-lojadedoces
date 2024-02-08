<?php

namespace App\Models;

use PDO;

abstract class Mia {
    protected PDO $pdo;
    public function __construct() {
        $this->pdo = new PDO('sqlite:'.database_path('mia.sqlite'), '', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }
}