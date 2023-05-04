<?php
  /*
  ## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Form Input</title>
  </head>
  
  <body>
    
    <form class="my-5 text-center" action="verification.php" method="get">
      <div class="mb-5">
        <label for="name" class="form-label">Name</label>
        <input type="text"
          class="form-control w-50 mx-auto" name="name" id="name" aria-describedby="nameHelper" placeholder="Insert your name">
        <small id="nameHelper" class="form-text text-muted">Insert your name</small>
      </div>
      <div class="mb-5">
        <label for="email" class="form-label">E-mail</label>
        <input type="email"
          class="form-control w-50 mx-auto" name="email" id="email" aria-describedby="emailHelper" placeholder="Insert your e-mail">
        <small id="emailHelper" class="form-text text-muted">Insert your e-mail</small>
      </div>
      <div class="mb-5">
        <label for="age" class="form-label">Age</label>
        <input type="number"
          class="form-control w-50 mx-auto" name="age" id="age" aria-describedby="ageHelper" placeholder="Insert your age">
        <small id="ageHelper" class="form-text text-muted">Insert your age</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
    
  </body>
  
</html>