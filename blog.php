<?php
include('header.php');
include('connect.php');

?>
<!-- <div class="container">
      <div class="journal-block">
        <div class="row"> -->

<?php 
// global $db;
// $results = $db->query("select * from articles");
// $posts = $results->fetchAll(PDO::FETCH_ASSOC);
// $table = '<table class="table table-striped">
// <thead>
//   <tr>
//     <th scope="col">#</th>
//     <th scope="col">Name</th>
//     <th scope="col">Price</th>
//     <th scope="col">Image</th>
//      <th scope="col">Delete</th>
//   </tr>
// </thead>
// <tbody>';
//  echo $table;
//  foreach($posts as $key => $post) {
//    $title = $post['title'];
//    $img = $post['name'];
 
  //  echo "<tr><th scope='row'>$id</th><td>$name</td><td>$price</td><td><img src='./$img' width='50px'/></td><td><button> Delete </button></td></tr>";
  // }
  // echo '</tbody></table>';

// echo "<div class=\"col-lg-4 col-md-6\">\n";
// echo "            <div class=\"journal-info\">\n";
// echo "\n";
// echo "              <a href=\"blog-single.html\"><img src='./$img'  class=\"img-responsive\" alt=\"img\"></a>\n";
// echo "\n";
// echo "              <div class=\"journal-txt\">\n";
// echo "\n";
// echo "                <h4><a href=\"blog-single.html\">$title\n";
// echo "                <p class=\"separator\">To an English person, it will seem like simplified English\n";
// echo "                </p>\n";
// echo "\n";
// echo "              </div>\n";
// echo "\n";
// echo "            </div>";
//  }

?>

<!-- </div>
    </div>

  </div> -->






<div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>journal</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="/assets/blog/html.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h2 class="text-center"><a href="#">Learning HTML</a></h2>
                <p class="separator text-center">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="/assets/blog/css.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h2 class="text-center"><a href="#">Learning CSS</a></h2>
                <p class="separator text-center">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="/assets/blog/js.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h2 class="text-center"><a href="#">Learning JavaScript</a></h2>
                <p class="separator text-center">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>


  <?php
include('footer.php');
?>