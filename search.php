<?php
include('connect.php');
include('header.php');
ini_set('display_errors', 1);
error_reporting(E_ALL); 

?>





<h1>Search</h1>







<?php
$search_value=$_GET["query"];

global $db;
$results = $db->query("SELECT * FROM articles WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')");
$output = $results->fetchAll(PDO::FETCH_ASSOC);


foreach($output as $key => $line) {

    echo $line['title'];
   
}
                

        
?>





<?php
include('connect.php');
include('footer.php');

?>