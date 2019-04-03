<?php
include('connect.php');

$connect_file=$_SERVER["DOCUMENT_ROOT"]. "connect.php";
include_once($connect_file);

function insertPortfolio($name, $small_desc, $img) {
  $connect_file=$_SERVER["DOCUMENT_ROOT"]. "connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare("insert into portfolios (name, small_desc, img) values (?,?,?)");
    $insert->bindValue(1, $name);
    $insert->bindValue(2, $small_desc);
    $insert->bindValue(3, $img);
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    echo "Database product insert failure " . $e->getMessage();
    return false;
  }
}



function insertUser($username, $email, $password) {
  $connect_file=$_SERVER["DOCUMENT_ROOT"]. "connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare("insert into users (login, email, password) values (?,?,?)");
    $insert->bindValue(1, $username);
    $insert->bindValue(2, $email);
    $insert->bindValue(3, $password);
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    echo "Registration failure " . $e->getMessage();
    return false;
  }
}






function deletePortfolio($id) {
    $connect_file=$_SERVER["DOCUMENT_ROOT"]. "connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare(" delete from portfolios where id = ?");
    $insert->bindValue(1, $id);
   
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    //echo "Database product delete failure " . $e->getMessage();
    return false;
  }
}
function updateProduct($id, $name, $small_desc, $img) {
  $connect_file=$_SERVER["DOCUMENT_ROOT"]. "connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare("update products set name = ?, small_desc=? , img=? where id=?");
    $insert->bindValue(1, $name);
    $insert->bindValue(2, $small_desc);
    $insert->bindValue(3, $img);
    $insert->bindValue(4, $id);
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    echo "Database product update failure " . $e->getMessage();
    return false;
  }
}

function listAllProducts() {
 global $db;
	$results = $db->query("select * from products");
	$products = $results->fetchAll(PDO::FETCH_ASSOC);
  $table = '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
       <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>';
   echo $table;
   foreach($products as $key => $product) {
     $id = $product['id'];
     $name = $product['name'];
     $price = $product['price'];
     $img=  $product['img'];
     echo "<tr><th scope='row'>$id</th><td>$name</td><td>$price</td><td><img src='./$img' width='50px'/></td><td><button> Delete </button></td></tr>";
    }
    echo '</tbody></table>';
}


function adminListAllPortfolios() {
  global $db;
   $results = $db->query("select * from portfolios");
   $portfolios = $results->fetchAll(PDO::FETCH_ASSOC);
   $table = '<table class="table table-striped">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Name</th>
       <th scope="col">Small Description</th>
       <th scope="col">Image</th>
       <th scope="col">Delete</th>
     </tr>
   </thead>
   <tbody>';
    echo $table;
    foreach($portfolios as $key => $portfolio) {
      $id = $portfolio['id'];
      $name = $portfolio['name'];
      $small_desc = $portfolio['small_desc'];
      $img=  $portfolio['img'];
      echo "<tr><th scope='row'>$id</th><td>$name</td><td>$small_desc</td><td><img src='$img' width='50px'/></td>
      <form id='delete' name='delete' method='post' action='deleteProduct.php'><td><input type='hidden' id='portfolioid' name='portfolioid' value='$id'/><button type='submit' id='deleteBtn' name='deleteBtn'> Delete </button></td></tr>";
     }
     echo '</tbody></table>';
 }


?>