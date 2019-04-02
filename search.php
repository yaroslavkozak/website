<?php
include('connect.php');
include('header.php');
ini_set('display_errors', 1);
error_reporting(E_ALL); 

?>





<h1>Search</h1>







<?php
try {
    $query = $_GET['query'];
    $results = $db->prepare("SELECT * FROM articles
    WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')");


    //$results->execute();
      $output = $results->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
     echo "Data could not be retrieved from the database.";
     exit;
  }
  echo "ok";
  foreach($output as $key => $line) {
    echo $line["tittle"];
  }
  } else 
    echo "no search query provided.";
?>





<?php
include('connect.php');
include('footer.php');

?>