<?php 
    include './bbra/pages/conixion.php';
    if(isset($_POST['submit'])){
        
        $image = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];  
        $folder = "../assets/img/".$image;
        
        if(move_uploaded_file($tempname,$folder)){
            echo 'images est uplade';
        }

        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];


        $requete = $con->prepare("INSERT INTO client (nom,email,telephone) VALUES('$Name','$Email','$Phone')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:./bbra/fichier_client.php')
    ?>