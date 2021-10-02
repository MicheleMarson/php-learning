<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- with post method values are not visible in url -->
  <h1>POST method</h1>
  <form action="send_post.php" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fnamep">
    <label for="email">Email:</label>
    <input type="text" id="email" name="emailp">
    <input type="submit">
  </form>
  
  <!-- with get method values can be seen in url -->
  <h1>GET method</h1>
  <form action="send_get.php" method="GET">
    <label for="fnameg">First Name:</label>
    <input type="text" id="fnameg" name="fnameg">
    <label for="emailg">Email:</label>
    <input type="text" id="emailg" name="emailg">
    <input type="submit">
  </form>
</body>
</html>