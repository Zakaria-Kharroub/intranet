<?php
require_once 'config/Database.php';

class User {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnect();
    }

    public function register($nom, $prenom, $email, $password, $id_role) {
        $query = 'INSERT INTO utilisateurs (nom, prenom, email, password, id_role) VALUES (?, ?, ?, ?, ?)';
        $stmt = $this->connection->prepare($query);
        $stmt->execute([$nom, $prenom, $email, password_hash($password, PASSWORD_DEFAULT), $id_role]);
        return $stmt;
    }

    public function login($email, $password) {
        $query = 'SELECT * FROM utilisateurs WHERE email = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
