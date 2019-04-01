<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Yaroslav Kozak - IT Specialist & Tech Enthusiast</title>

    <!-- Bootstrap CSS -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->






    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" media="all"/>
  </head>

  <body>
      <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand ml-md-4" href="/"
        ><img src="/assets/logo.png" alt=""
      /></a>

      <!-- Mobile Menu-->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-md-4">
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="/about.html/">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="portfolio.php">Portfolio</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle font-weight-bold"
              id="navbarDropdown"
              data-toggle="dropdown"
              href="portfolio.php"
              >Portfolio</a
            >
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Web</a>
              <a class="dropdown-item" href="#">Design</a>
              <a class="dropdown-item" href="#">Branding</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Code</a>
            </div> -->
          </li>
          <li class="nav-item ">
            <a class="nav-link font-weight-bold" href="/blog/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="/contact.html/">Contact</a>
          </li>
          <li class="nav-item">
             <?php if (isset($_SESSION["username"])) { ?>
               <a class="nav-link" href="logout.php">Logout</a>
              <?php }  else { ?> 
               <a class="nav-link" href="login.php">Login</a>
                <?php
                 } ?>
            </li>
            <li class="nav-item">
              <?php echo $_SESSION["username"]; 
                 if ($_SESSION["is_admin"] == 'Y') { ?>
                    <!-- <meta http-equiv="refresh" content="0; url=index.php" />  -->
              <?php
                 }?>
              
            </li>
        </ul>

        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>


      </div>
    </nav>  
                </header>



     <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".web">Web</a></li>
                            <li><a href="" data-filter=".design">Design</a></li>
                            <li><a href="" data-filter=".branding">Branding</a></li>
                            <li><a href="" data-filter=".ads">Advertising</a></li>
                            <!-- <li><a href="" data-filter=".fashion">Fashion</a></li> -->
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 web">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="/assets/portfolio/xenum.jpg" alt="image" class="img-responsive"
                                style="width:100%; height:100%;" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Xenum Ukraine Website</span>
                                        <em>Website</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 ads branding">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="/assets/portfolio/park-dental.jpg" alt="image" class="img-responsive"
                                style="width:100%; height:100%;" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Park Dental Branding</span>
                                        <em>Branding</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 web">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="/assets/portfolio/oximo.jpg" alt="image" class="img-responsive"
                                style="width:100%; height:100%;" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Oximo Ukraine Website</span>
                                        <em>Web</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="/assets/portfolio/xenum-marketing.jpg" alt="image" class="img-responsive"
                                style="width:100%; height:100%;" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Xenum Ukraine Marketing</span>
                                        <em>Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 design">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="/assets/portfolio/park-dental-logo.png" alt="image" class="img-responsive"
                                style="width:100%; height:100%;" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>ParkDental Logo</span>
                                        <em>Design</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="/assets/portfolio/oximo-marketing.jpg" alt="image" class="img-responsive"
                                style="width:100%; height:100%;" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Oximo Ukraine Marketing</span>
                                        <em>Marketing</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->


                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->


    

    <!-- back to top -->
    <!-- <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a> -->
    <!-- end back to top -->






        <!-- PORTFOLIO -->
    <!-- <link href="/portfolio/ionicons/css/ionicons.min.css" rel="stylesheet"> -->
    <!-- !TODO ICONS -->
    
    <!-- <link href="/portfolio/style.css" rel="stylesheet"> -->
    <script src="/portfolio/modernizr.js"></script> 


    <!-- jQuery -->
    <script src="/portfolio/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <!-- <script src="/portfolio/bootstrap.min.js"></script> -->
    <script src="/portfolio/menu.js"></script>
    <script src="/portfolio/animated-headline.js"></script>
    <script src="/portfolio/isotope.pkgd.min.js"></script>

    


    <!--  custom script -->
    <script src="/portfolio/custom.js"></script>










    </body>
</html>