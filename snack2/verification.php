<?php
  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];
  $nameCondition = strlen($name) > 3;
  $emailConditionAt = str_contains($email, "@");
  $emailConditionDot = str_contains($email, ".");
  $ageCondition = is_numeric($age);
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        
    <title>Form Verification</title>
  </head>
  
  <body>
    
    <?php if ($nameCondition && $emailConditionAt && $emailConditionDot && $ageCondition) : ?>
    <p>Accesso riuscito</p>
    <?php else : ?>
    <p>Accesso negato</p>
    <?php endif; ?>
    
  </body>
  
</html>