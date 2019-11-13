<?php

include 'dbconnexion.php';
$firstname = $_POST['firstname'] ; 
$lastname = $_POST['lastname'] ; 
$email = $_POST['email'] ; 
$phone = $_POST['phone'] ; 
$id = $_POST['id'];

$req = $bdd->prepare('UPDATE students SET firstname=:firstname, lastname=:lastname, email=:email, phone=:phone WHERE id='.$id.'' );
$req->bindParam(':firstname',$firstname);
$req->bindParam(':lastname',$lastname);
$req->bindParam(':email',$email);
$req->bindParam(':phone',$phone);
$req->execute();
header('Location:index.php');
?>


 