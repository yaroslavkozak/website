<?php
include('header.php');
include('connect.php');


?>
 <main role="main" style="
    margin-top: 50px;">
    <div class="container">

<?php


//global $db;
$posts = $db->query("SELECT * FROM articles WHERE (`title` LIKE '%".$Learning . " " . css."%')");
$post_output = $posts->fetchAll(PDO::FETCH_ASSOC);



if (!$post_output || mysqli_num_rows($post_output) > 0) { 

    echo "<span class=\"align-middle\"><h1>Learning CSS</h1></span>";

foreach($post_output as $key => $posts) {

    echo "</br>" .  $posts['text'] . "</br>";
   
}
}else echo ""; 
                

        
?>

<?php 
  
?>
</main>
<?php
include('footer.php');
?>