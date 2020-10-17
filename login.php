<?php
if (isset($_POST['cancel'])) {
  header("Location: index.php");
  return;
}

$message = false;

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';


if (isset($_POST['user']) && isset($_POST['pass'])) {
  if (strlen($_POST['user']) < 1 || strlen($_POST['pass']) < 1) {
    $message = "Username and password required";
  } else {
    $check = hash('md5', $salt.$_POST['pass']);
    if ($check == $stored_hash) {
      header("Location: game.php?name=".urlencode($_POST['user']));
      return;
    } else {
      $message = "Incorrect Password";
    }
  }
}
?>

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
 echo('<p style="color:red;">'.htmlentities($message)."</p>");
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