<?php
namespace StickerApi;

class DatabaseConnection {
    private $pdo;
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::DATABASE_PATH);
        }
        return $this->pdo;
    }
}