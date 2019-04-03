<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
include('header.php');

include('dbfunctions.php');
?>

Ready

<?php

/* if the form insert button was clicked then get the values from the POST and insert the product in the database... */
if (isset($_POST["insert"]))

{


  
  $login = $_POST["login"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  
  

  insertUser($login, $email, $password);
  
}


?>


<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
include('dbfunctions.php');
?>