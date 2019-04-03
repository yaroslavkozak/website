    
    <?php
include('header.php');
include('connect.php');
?>

    <form  method="post" action="registered.php"  enctype="multipart/form-data">
        <div class="field-name">
            <i class="fas fa-user" style="color:black;"></i>
            <input type="text" placeholder="Enter your desired Username" name = "login" required>
            <i class="fas fa-arrow-down" style="color:black;"></i>
        </div>

        <div class="field-email innactive">
            <i class="fas fa-envelope" style="color:black;"></i>
            <input type="email" placeholder="Enter your Email" name = "email" required>
            <i class="fas fa-arrow-down" style="color:black;"></i>
        </div>

        <div class="field-password innactive">
            <i class="fas fa-key" style="color:black;"></i>
            <input type="password" placeholder="Password" name = "password" required>
            <i class="fas fa-arrow-down" style="color:black;"></i>
        </div>
        <div class="field-finish innactive">
            <i class="fas fa-heart" style="color:black;"></i>
            <p style="color:black;" >The user account has been created. Thank You!</p>
            <input class="btn btn-primary" type="submit" name="insert" value="Ready"/> 
            <i class="fas fa-heart" style="color:black;"></i>

        </div>
    </form>


    







    <?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
include('dbfunctions.php');
?>
   
    

  

<?php
// if (isset($_POST["insert"]))

// {


  
//   $login = $_POST["login"];
//   $email = $_POST["email"];
//   $password = $_POST["password"];


//   insertUser($login, $email, $password);
//   exit();
// }
?>

    





    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="/form/form-style.css">
    <script src="/form/form.js"></script>
    
