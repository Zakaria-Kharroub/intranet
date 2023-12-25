<?php
include 'controllers/UserController.php';

$UserController = new UserController();

if (isset($_GET['action'])) {
    $submit= $_GET['action'];
    switch ($submit) {
        case 'listFormateurs':
            $UserController->listFormateurs();
            break;

        case 'listUsers' : $UserController->listUsers();
        break;

        case 'ajouterFormateur': 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nom = $_POST['nom'];
              
                $prenom = $_POST['prenom'];
                $email =$_POST['email'];
                $password = $_POST['password'];
                $id_class= $_POST['id_class'];

                $UserController->ajouterFormateur($nom, $prenom,$email, $password,$id_class);
            }
            break;
        case 'ajouterApprenant':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email =$_POST['email'];
                $password = $_POST['password'];
                $id_class= $_POST['id_class'];

                $UserController->ajouterApprenant($nom, $prenom,$email, $password,$id_class);
            }
            break;

             




        case 'updateFormateur':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur =$_POST['id_utilisateur'];
                $nom =$_POST['nom'];
                $prenom =$_POST['prenom'];
                $email= $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->updateFormateur($id_utilisateur, $nom, $prenom, $email, $password,$id_class);
            }
            break;


        case 'updateApprenant':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur =$_POST['id_utilisateur'];
                $nom =$_POST['nom'];
                $prenom =$_POST['prenom'];
                $email= $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->updateApprenant($id_utilisateur, $nom, $prenom, $email, $password,$id_class);
            }
            break;

        case 'deleteFormateur':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur = $_POST['id_utilisateur'];
                $UserController->deleteFormateur($id_utilisateur);
            }
            break;
        
        case 'deleteApprenant':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur = $_POST['id_utilisateur'];
                $UserController->deleteApprenant($id_utilisateur);
            }
            break;



        default:
            $UserController->listUsers();
            break;
    }
} else {
    $UserController->listUsers();
}




































// if (isset($_POST['submit'])) {
//    $submit=$_POST['submit'];
//    switch($submit){
//     case 'register': extract($_POST); $UserController->register($nom,$prenom,$email,$password,$id_role); break;
//     case 'login': extract($_POST); $UserController->login($email,$password); break;
// }
// }


// if (isset($_GET['action'])) {
//   $submit=$_GET['action'];
//   switch($submit){
    
//    case 'login': include "views/login.php"; break;
// }
// }else{
//   include "views/register.php";
// }