    <form  method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  enctype="multipart/form-data">
        <div class="field-name">
            <i class="fas fa-user" style="color:black;"></i>
            <input type="text" placeholder="Enter your desired Username" name = "username" required>
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
/* if the form insert button was clicked then get the values from the POST and insert the product in the database... */
if (isset($_POST["insert"]))

{

header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */

  
  $login = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  
  

  insertUser($login, $email, $password);
  exit();
}


?>

    





    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="/form/form-style.css">
    <script src="/form/form.js"></script>
    
