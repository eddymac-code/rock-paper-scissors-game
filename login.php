<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RPS -Login page</title>
  <?php require_once("bootstrap.php");?>
</head>
<body>
<div class="container">
 <h1>Please log in</h1>

 <?php
 
 ?>

 <form method="post">
 <label for="usr">Username:</label>
 <input type="text" name="user" id="usr">
 <label for="pswrd"></label>
 <input type="password" name="pass" id="pswrd">
 <input type="submit" value="Log in">
 <input type="submit" name="cancel" value="Cancel">
 </form> 
</div>
</body>
</html>