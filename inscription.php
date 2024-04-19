<?php require('config/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>inscription</title>
</head>
<body>
  <br><br>
  <form class="container" method="post">
  <div class="mb-3">
    <label class="form-label">pseudo</label>
    <input type="text" class="form-control" name="pseudo">
   </div>
  
   <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >
   </div>
   <div class="mb-3">
    <label class="form-label">mot de passe</label>
    <input type="password" class="form-control" name="password">
</div>
  <button type="submit" class="btn btn-primary" name="valider">s'inscrrire</button>
</form>
</body>
</html>