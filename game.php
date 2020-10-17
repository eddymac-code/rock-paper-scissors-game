<?php
if (! isset($_GET['name'])) {
  die("Missing name parameter. You have no permission to play!");
}

if (isset($_POST['lgt'])) {
  header("Location: login.php");
  return;
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RPS - Game</title>
  <?php require_once("bootstrap.php");?>
</head>
<body>
  <div class="container">
  <h1><?php echo "Hi ".$_GET['name'].",\n"?>Thank You and welcome</h1>
  <p>Here, you will select an option among rock, paper, and scissors.
  Let's see how you do against the computer!</p>
  <form method="post">
  <select name="" id="">
  <option value="0">--Please select an option--</option>
  <option value="1">Rock</option>
  <option value="2">Paper</option>
  <option value="3">Scissors</option>
  </select>
  <input type="submit" value="Play">
  <input type="submit" name="lgt" value="Logout">
  </form>
  </div>
</body>
</html>

