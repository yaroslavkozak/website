<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL); 
session_start(); ?>

<?php
include('header.php');
include('hero.php');
?>
 <main role="main" style="
    margin-top: 50px;">
<?php 
   include('main.php');
?>
</main>
<?php
include('footer.php');
?>