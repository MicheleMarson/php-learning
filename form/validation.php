<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error{
      color: red;
    }
  </style>
</head>
<body>
<?php
  $name = $email = $password = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){ // if method is post - if data vas posted
    if(empty($_POST["email"])){
      echo '<span class="error">Email Required</span>';
    }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
      echo '<span class="error">Email not in valid format</span>';
    }
    elseif(empty($_POST["password"])){
      echo '<span class="error">Password Required</span>';
    }else{
      $name = val($_POST["fname"]);
      $email = val($_POST["email"]);
      $password = val($_POST["password"]);
    }
    
  }

  function val($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">
    <input type="submit">
  </form>
  <hr>
  <div>
    <p>First name:<?php echo $name;?></p>
    <p>Email:<?php echo $email;?></p>
    <p>Password:<?php echo $password;?></p>
  </div>
</body>
</html>