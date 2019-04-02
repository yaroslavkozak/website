<?php
session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Yaroslav Kozak - IT Specialist & Tech Enthusiast</title>

    <!-- Bootstrap CSS -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->


        <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

  </head>

  <body>
      <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand ml-md-4" href="/"
        ><img src="/assets/logo.png" alt=""
      /></a>

      <!-- Mobile Menu-->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-md-4">
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="portfolio.php">Portfolio</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle font-weight-bold"
              id="navbarDropdown"
              data-toggle="dropdown"
              href="portfolio.php"
              >Portfolio</a
            >
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Web</a>
              <a class="dropdown-item" href="#">Design</a>
              <a class="dropdown-item" href="#">Branding</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Code</a>
            </div>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link font-weight-bold" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="contact.php">Contact</a>
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
                 if ($_SESSION["is_admin"] == 'Y') { ?>
                    <!-- <meta http-equiv="refresh" content="0; url=index.php" />  -->
              <?php
                 }?>
              
            </li>
        </ul>

        <form class="form-inline mt-2 mt-md-0" action="search.php" method="GET" >
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="query" >
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>


      </div>
    </nav>  
                </header>