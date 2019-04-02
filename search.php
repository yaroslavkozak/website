<?php
include('connect.php');
include('header.php');
ini_set('display_errors', 1);
error_reporting(E_ALL); 

?>





<h1>Search</h1>




<?php
    $query = $_GET['search']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    // if(strlen($search) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
       // $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        // $raw_results = mysql_query("SELECT * FROM articles
        //     WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
             
        $results = $db->query("SELECT * FROM articles
        WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')");     


        $output = $results->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $key => $output) {
            echo "<p><h3>".$output['title']."</h3>".$output['title']."</p>";
          }
          
      ?>





<?php
include('connect.php');
include('footer.php');

?>