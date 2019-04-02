<?php
include('connect.php');
include('header.php');

?>





<h1>Search</h1>
<?php
    $query = $_GET['search']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($search) >= $min_length){ // if query length is more or equal minimum length then
         
        $search = htmlspecialchars($search); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $search = mysql_real_escape_string($search);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM articles
            WHERE (`title` LIKE '%".$search."%') OR (`text` LIKE '%".$search."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['title']."</h3>".$results['title']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>


<?php
include('connect.php');
include('footer.php');

?>