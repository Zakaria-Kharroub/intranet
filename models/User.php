<?php
require_once 'config/Database.php';

class User {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnect();
    }

    public function getUsers() {
        $query = 'SELECT utilisateurs.*, classes.name_class 
                FROM utilisateurs 
                    LEFT JOIN classes ON utilisateurs.id_class = classes.id_class
                  WHERE utilisateurs.id_role = 3';
        $stmt = $this->connection->query($query);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getFormateurs() {
        $query = 'SELECT utilisateurs.*, classes.name_class 
                FROM utilisateurs 
                    LEFT JOIN classes ON utilisateurs.id_class = classes.id_class
                  WHERE utilisateurs.id_role = 2';
         $stmt = $this->connection->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getClasses() {
        $query = 'SELECT * FROM classes';
        $stmt = $this->connection->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterFormateur($nom, $prenom, $email, $password, $id_class) {
        $query = 'INSERT INTO utilisateurs (nom,prenom, email,password, id_role, id_class) VALUES (?,?,?,?, 2, ?)';
         $stmt = $this->connection->prepare($query);
          $stmt->execute([$nom,$prenom,$email, password_hash($password,PASSWORD_DEFAULT), $id_class]);
         return $stmt;
    }

    public function ajouterApprenant($nom, $prenom, $email, $password, $id_class){
        $query = 'INSERT INTO utilisateurs (nom,prenom, email,password, id_role, id_class) VALUES (?,?,?,?, 3, ?)';
        $stmt = $this->connection->prepare($query);
         $stmt->execute([$nom,$prenom,$email, password_hash($password,PASSWORD_DEFAULT), $id_class]);
        return $stmt;
    }

    public function updateFormateur($id_utilisateur,$nom,$prenom, $email,$password, $id_class) {
        $query = 'UPDATE utilisateurs 
                  SET nom = ?, prenom=?, email= ?, password =?, id_class =? 
                  WHERE id_utilisateur =?';
         $stmt = $this->connection->prepare($query);
          $stmt->execute([$nom,$prenom,$email,password_hash($password,PASSWORD_DEFAULT), $id_class, $id_utilisateur]);
        return $stmt;
    }
    

    public function updateApprenant($id_utilisateur,$nom,$prenom, $email,$password, $id_class) {
        $query = 'UPDATE utilisateurs 
                  SET nom = ?, prenom=?, email= ?, password =?, id_class =? 
                  WHERE id_utilisateur =?';
         $stmt = $this->connection->prepare($query);
          $stmt->execute([$nom,$prenom,$email,password_hash($password,PASSWORD_DEFAULT), $id_class, $id_utilisateur]);
        return $stmt;
    }


    public function deleteFormateur($id_utilisateur) {
        $query = 'DELETE FROM utilisateurs WHERE id_utilisateur = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->execute([$id_utilisateur]);
        return $stmt;
    }




    public function deleteApprenant($id_utilisateur) {
        $query = 'DELETE FROM utilisateurs WHERE id_utilisateur = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->execute([$id_utilisateur]);
        return $stmt;
    }


    




}





























    
    // public function register($nom, $prenom, $email, $password, $id_role) {
    //     $query = 'INSERT INTO utilisateurs (nom, prenom, email, password, id_role) VALUES (?, ?, ?, ?, ?)';
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->execute([$nom, $prenom, $email, password_hash($password, PASSWORD_DEFAULT), $id_role]);
    //     return $stmt;
    // }

    // public function login($email, $password) {
    //     $query = 'SELECT * FROM utilisateurs WHERE email = ?';
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->execute([$email]);
    //     $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //     if ($user && password_verify($password, $user['password'])) {
    //         return $user;
    //     }
    //     return false;
    // }

