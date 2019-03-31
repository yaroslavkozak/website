<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL); 
session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Yaroslav Kozak - IT Specialist & Tech Enthusiast</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand ml-md-4" href="/"><img src="/assets/logo.png" alt=""></a>

    <!-- Mobile Menu-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-md-4">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about.html/">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" href="#">Portfolio</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Web</a>
            <a class="dropdown-item" href="#">Design</a>
            <a class="dropdown-item" href="#">Branding</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Code</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog/">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.html/">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact.html/">Contact</a>
        </li>
        <li class="nav-item">
             <?php if (isset($_SESSION["username"])) { ?>
               <a class="nav-link" href="logout.php">Logout</a>
              <?php }  else { ?> 
               <a class="nav-link" href="login.php">Login</a>
                <?php
                 } ?>
            </li>
            <li class="nav-item">
              <?php echo $_SESSION["username"]; 
                 if ($_SESSION["is_admin"] == 'Y') { ?>1
                    <meta http-equiv="refresh" content="0; url=index.php" /> 
              <?php
                 }?>
              
            </li>


      </ul>
    </div>
  </nav>       