<?php
include('connect.php');
include('header.php');
ini_set('display_errors', 1);
error_reporting(E_ALL); 

?>





<h1>Search</h1>







<?php
$search_value=$_GET["query"];

        $sql="SELECT * FROM articles
        WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'First_name:  '.$row["title"];


            }       

        
?>





<?php
include('connect.php');
include('footer.php');

?>