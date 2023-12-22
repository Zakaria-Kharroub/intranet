<?php
session_start();
include 'controllers/UserController.php';


$UserController = new UserController();

if (isset($_POST['submit'])) {
   $submit=$_POST['submit'];
   switch($submit){
    case 'register': extract($_POST); $UserController->register($nom,$prenom,$email,$password,$id_role); break;
    case 'login': extract($_POST); $UserController->login($email,$password); break;
}
}


if (isset($_GET['action'])) {
  $submit=$_GET['action'];
  switch($submit){
    
   case 'login': include "views/login.php"; break;
}
}else{
  include "views/register.php";
}