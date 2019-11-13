<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container jumbotron">
        <h1 class="alert alert-dark text-center">hello</h1>


<?php

include 'dbconnexion.php';
$reponse = $bdd->prepare('SELECT *FROM students'); 

$reponse->execute();
echo'<table class="table table-hover">';
while ($donnees = $reponse->fetch()) 
{
    echo '<tr class="bg-warning">'; 
    echo '<td  class="table-primary">'.$donnees['id'] . '<br />  </td>'; 
    echo '<td class="table-danger">'.$donnees['firstname'] . '<br /> </td>'; 
    echo '<td class="table-info">'. $donnees['lastname'] . '<br /> </td>'; 
    echo '<td class="table-secondery"> '.$donnees['email'] . '<br /> </td>'; 
    echo  '<td class="table-success">'.$donnees['phone'].'<br/></td>'; 
    echo  '<td class="table-primary"> <a class="btn btn-info" href="delete.php?id='.$donnees['id'].'">supprimer</a></td>';
    echo  '<td class="table-primary"> <a class="btn btn-info" href="edit.php?id='.$donnees['id'].'">modifier</a></td>';  
echo'</tr>';

   
}
?>
</table>
<a  class="btn btn-primary"href="create.php">ajouter</a>
    </div>


</body>
</html>