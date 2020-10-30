<?php
// request GET parameter
if (! isset($_GET['name'])) {
  die("Missing name parameter. You have no permission to play!");
}

// User requests to log out
if (isset($_POST['lgt'])) {
  header("Location: login.php");
  return;
}

// Set up values for the game
// Rock is 0, paper is 1, Scissors is 2
$names = array("Rock", "Paper", "Scissors");
$human = isset($_POST['human']) ? $_POST['human']+0 : -1;

// Computer should be random
$computer = rand(0, 2);

/* The following function takes the player's input, the computer's
input and returns "You Win", "You Lose", and "Tie" depending on
the play */
function check($human, $computer) {
  switch ($computer) {
    case 0:
      switch ($human) {
        case 0:
          return "Tie";
          break;

        case 1:
          return "You Win";
          break;

        case 2:
          return "You Lose";
          break;
      }
      break;

    case 1:
      switch ($human) {
        case 0:
          return "You Lose";
          break;

        case 1:
          return "Tie";
          break;

        case 2:
          return "You Win";
          break;
      }
      break;

    case 2:
      switch ($human) {
        case 0:
          return "You Win";
          break;

        case 1:
          return "You Lose";
          break;

        case 2:
          return "Tie";
          break;
      }
      break;
  }

  // Alternative code
  
/*  if ($computer == 0) {
    switch ($human) {
      case 0:
        return "Tie";
        break;

      case 1:
        return "You Win";
        break;

      case 2:
        return "You Lose";
        break;
      
      default:
        # code...
        break;
    }
  }
  if ($computer == 1) {
    switch ($human) {
      case 0:
        return "You Lose";
        break;

      case 1:
        return "Tie";
        break;

      case 2:
        return "You Win";
        break;
      
      default:
        # code...
        break;
    }
  } 
  if ($computer == 2) {
    switch ($human) {
      case 0:
        return "You Win";
        break;

      case 1:
        return "You Lose";
        break;

      case 2:
        return "Tie";
        break;
      
      default:
        # code...
        break;
    }
  }*/
}

// Check to see how play occurred
$result = check($human, $computer);

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
  <h1>Rock Paper Scissors</h1>
  <?php
  if (isset($_REQUEST['name'])) {
    echo "<p>Welcome: ";
    echo htmlentities($_REQUEST['name']);
    echo "</p>\n";
  }
  
  ?>
  <form method="post">
  <select name="human">
  <option value="-1">--Please select an option--</option>
  <option value="0">Rock</option>
  <option value="1">Paper</option>
  <option value="2">Scissors</option>
  </select>
  <input type="submit" value="Play">
  <input type="submit" name="lgt" value="Logout">
  </form>

  <pre>
  <?php
  if ($human == -1) {
    print "Please select strategy and play";
  } else {
    print "Your play: $names[$human] | Computer play: $names[$computer] | Result: $result\n";
  }
  ?>
  </pre>
  </div>
</body>
</html>

