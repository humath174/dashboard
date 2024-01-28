<?php
session_start();
if(isset($_POST['submit'])){
    include 'pages/conixion.php';
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $requete = "SELECT * FROM users WHERE name = '$email' and mdp = '$password'";
    $statment = $con -> prepare($requete);
    $statment -> execute();
    $result = $statment -> fetch();
    if($result['Email'] === $email && $result['Password'] === $password){
        $_SESSION['name'] = $result['username'];
        $_SESSION['email'] = $result['Email'];
        $_SESSION['password'] = $result['Password'];
        if(isset($_POST['check'])){
            setcookie('email',$_SESSION['email'],time() + 3600);
            setcookie('password',$_SESSION['password'],time() + 3600);
        }
        header("location:welcome.php");
    }
    else if(empty($email) || empty($password)){
        header("location:connexion.php?error=please enter your email or password");
    }
    else
    {
        header("location:connexion.php?error=email or password not found");
    }
}?>