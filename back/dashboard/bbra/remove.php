<?php 
    include 'pages/conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM contact WHERE Id=$id");
        $stmt -> execute();

    }
    header('location:contact-rec.php');
?>