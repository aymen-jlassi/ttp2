   
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

   
<form class="container" method="POST" action="store.php">
    <h1 class="alert-black">Nouvel Etudiant</h1>
  <div class="row">
    <div class="col">
    <br>
        first name
        <br>
      <input type="text" class="form-control" placeholder="First name" name="firstname">
    </div>
    <div class="col">
    <br>
        last name
        <br>
      <input type="text" class="form-control" placeholder="Last name" name="lastname">
    </div>
  </div>
  <br><br><br>
  <div class="row">
  <div class="col">
      email
      <br>
      <input type="text" class="form-control" placeholder="email@email.com" name="email">
    </div>
    <div class="col">
        phone
        <br>
      <input type="text" class="form-control" placeholder="123456789" name="phone">
    </div>
    
  </div>
  <br><br>

  <button class="btn btn-primary">Enregistre</button>
  <button class="btn btn-secondary">annuler</button>
</form>
   

   

</div>
</form>
</body>
</html>