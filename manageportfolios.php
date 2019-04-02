<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

include('header.php');
include('dbfunctions.php');
/*
 if ($_SESSION["is_admin"] != 'Y') { ?>
 <meta http-equiv="refresh" content="0; url=index.php" /> 
<?php } 
*/
?>
 <main role="main" style="margin: 50px;">


<div class="row">
    <div class="col-sm-4">
    <form  method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  enctype="multipart/form-data">
  <div class="form-group">
  <!-- <label for="productName">Product Name</label> -->
  <input type="text" class="form-control" id="portfolioName" name="portfolioName" placeholder="Project Name"/> <br>   
    <!-- <small id="emailHelp" class="form-text text-muted">Name of the new Portfolio.</small> -->
  </div>
  <div class="form-group">
  <!-- <label for="small_desc">Small Description</label> -->
  <input type="text" class="form-control" id="small_desc" name="small_desc" placeholder="Small Description"/> <br>
  <!-- <small id="emailHelp" class="form-text text-muted">Not More than 100 letters</small> <br> -->
  </div>
  <div class="custom-file"> <br>
  <!-- <label for="imagePath">Image </label> -->
    <input type="file" class="custom-file-input" name="imagePath" id="imagePath" >
    <label class="custom-file-label" for="imagePath">Image </label>
   <input class="btn btn-primary" type="submit" name="insert" value="Insert"/> 

  </form> 
  
  <br>

    </div>
</div>
 </div>

 </main>


<div class="container">

<div class="row">
 
    <h2 class="align-center">CURRECT PORTFOLIO</h2> 
    
</div>
</div>




      
    
    
    


   
    

  

<?php
/* if the form insert button was clicked then get the values from the POST and insert the product in the database... */
if (isset($_POST["insert"]))
{ 
  
$target_dir = "/assets/portfolio/";
$target_file = $target_dir . basename($_FILES["imagePath"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  
  $check = getimagesize($_FILES["imagePath"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
  
  // Check if file already exists
if (file_exists($target_file)) {
    echo "File already exists... on the server";
}
// Check file size
if ($_FILES["imagePath"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagePath"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagePath"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
  
  $productName = $_POST["portfolioName"];
  $small_desc = $_POST["small_desc"];
  $imagePath = $target_file;
  
  

  insertProduct($productName, $small_desc, $imagePath);
}

adminListAllProducts();
include('footer.php');
?>