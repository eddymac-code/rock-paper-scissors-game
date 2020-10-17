<?php
if (! isset($_GET['name']) || strlen(($_GET['name']) < 1)) {
  die("Missing name parameter. You have no permission to play!");
}
?>