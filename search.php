<?php
include('connect.php');
include('header.php');
// ini_set('display_errors', 1);
// error_reporting(E_ALL); 

?>



<div class="container-fluid text-center align-middle page-banner">
<span class="align-middle"><h1>Search Result</h1></span>
</div>




<div class="container">

<?php
$search_value=$_GET["query"];

//global $db;
$posts = $db->query("SELECT * FROM articles WHERE (`title` LIKE '%".$search_value."%') OR (`text` LIKE '%".$search_value."%')");
$post_output = $posts->fetchAll(PDO::FETCH_ASSOC);



if (!$post_output || mysqli_num_rows($post_output) > 0) { 

    echo "<span class=\"align-middle\"><h1>Articles</h1></span>";

foreach($post_output as $key => $posts) {

    echo "</br>" . "<h2>" . $posts['title'] . "</h2>" . "</br>" . $posts['text'] . "</br>";
   
}
}else echo ""; 
                

        
?>

</div>



<div class="container">
<span class="align-middle"><h1>Works</h1></span>

<?php
$search_value=$_GET["query"];

//global $db;
$results = $db->query("SELECT * FROM portfolios WHERE (`name` LIKE '%".$search_value."%') OR (`small_desc` LIKE '%".$search_value."%')");
$output = $results->fetchAll(PDO::FETCH_ASSOC);


foreach($output as $key => $result) {

    echo "</br>" . "<h2>" . $result['name'] . "</h2>" . "</br>" . $result['small_desc'] . "</br>";
   
}
                

        
?>

</div>









<?php
include('connect.php');
include('footer.php');

?>