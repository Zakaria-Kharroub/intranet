<?php

require_once 'models/User.php';

class UserController {
  

    public function listFormateurs() {
        $user = new User();
        $users = $user->getFormateurs();
        $classes = $user->getClasses(); 
        require 'views/adminFormateur.php';
    }

    public function listUsers() {
        $user = new User();
        $users = $user->getUsers();
        require 'views/admin.php';
    }

     public function ajouterFormateur($nom, $prenom, $email, $password, $id_class) {
        $user = new User();
        $user->ajouterFormateur($nom, $prenom, $email, $password, $id_class);
        header('location: index.php?action=listFormateurs');
    }
    

}





























    
    // public function register($nom,$prenom,$email,$password,$id_role) {
       
    //         $user = new User();
    //         $user->register($nom,$prenom,$email,$password,$id_role);
    //         if ($user) {
                
    //             $_SESSION['user'] = $user;
    //             header('location: index.php?action=login');
    //         } else {
    //             $error = "email password incoretc";
    //             require 'views/register.php';
    //         }
         
           
    //     }
    

    // public function login() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $user = new User();
    //         $loggedInUser = $user->login($_POST['email'], $_POST['password']);
    //         if ($loggedInUser) {
    //             $_SESSION['user'] = $loggedInUser;
    //             header('location: index.php');
    //         } else {
    //             $error = "email password incoretc";
    //             require 'views/login.php';
    //         }
    //     } else {
    //         require 'views/login.php';
    //     }
    // }




  
