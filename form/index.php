<?php
include('/header.php');

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body> -->

    <!-- !TODO conter, error check, title -->


    <form action="">
        <div class="field-name">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" required>
            <i class="fas fa-arrow-down"></i>
        </div>

        <div class="field-email innactive">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" required>
            <i class="fas fa-arrow-down"></i>
        </div>

        <div class="field-password innactive">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Password" required>
            <i class="fas fa-arrow-down"></i>
        </div>
        <div class="field-finish innactive">
            <i class="fas fa-heart"></i>
            <p>Thank You!</p>
            <i class="fas fa-heart"></i>

        </div>
    </form>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js"></script>
</body>

</html>