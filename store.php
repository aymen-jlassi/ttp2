<?php 
    include 'dbconnexion.php';
     $firstname = $_POST['firstname'] ; 
     $lastname = $_POST['lastname'] ; 
     $email = $_POST['email'] ; 
     $phone = $_POST['phone'] ;  
    
  
      $req=$bdd->prepare("INSERT INTO students (firstname,lastname,email,phone) VALUES (:firstname,:lastname,:email,:phone)");
      $req->bindParam(':firstname',$firstname);
      $req->bindParam(':lastname',$lastname);
      $req->bindParam(':email',$email);
      $req->bindParam(':phone',$phone);
     
      $req->execute();
      echo "La personne a bien été ajoutée ! " ;
     header('Location:create.php');
    
?> 