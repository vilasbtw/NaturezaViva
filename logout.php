<?php
session_start();
foreach ($_SESSION as $value) {
  unset($value);
}
session_destroy(); 
header("Location: index.php");
?>
