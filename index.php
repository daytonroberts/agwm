<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/* 
define('DBHOST', 'localhost');
define('DBNAME', 'name here');
define('DBUSER', 'root');
define('DBPASS', '');
//define('DBCONNSTRING','sqlite:./art.db');
define('DBCONNSTRING',"mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4;");
 */
$server = "localhost";
$db = "test";
$username = 'root';
$password = "";
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection Failed".mysqli_connect_errors());
}

// function genQuery($qry) {
//     $result = mysqli_query($conn, $qry);
//     if (mysqli_num_rows($result) > 0) {

//     }
// }

if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $sql = mysqli_query($conn, "DELETE FROM articles WHERE id = '$delid'");
  echo "<script>alert('Data deleted successfully');</script>";
  echo "<script>window.location.href = 'index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chaparral Orchestra Community</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/images/CHS_Logo.png" rel="icon">
  <link href="assets/images/CHS_Logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/external_css.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-danger">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/images/CHS_Logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar" style="box-shadow: none;">
        <ul class="bg-danger">
          <!-- <li><a class="nav-link scrollto active text-light" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#calendar">Calendar</a></li>
          <li><a class="nav-link scrollto" href="#about">Private Teachers</a></li> -->
          <li class="dropdown nav-link scrollto active text-light"><a href="#hero"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="bg-danger">
              <li><a href="#calendar" class="nav-link scrollto dropdown-a ">Calendar</a></li>
              <li><a href="#about" class="nav-link scrollto dropdown-a">Private Teachers</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center fader">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 id="welcome">Welcome</h1>
          <h2 id="welcome2">to the Chaparral Orchestra Community</h2>
          <!-- <div><a href="#about" class="btn-get-started scrollto">Create Data</a></div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <div class="card card-carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 h-100" src="assets/images/shana-conducting.jpg" alt="First slide">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                    </h4>
                  </div> -->
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/abbeyrd.jpg"  alt="Second slide">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h4>
                        <i class="material-icons">location_on</i>
                        Somewhere Beyond, United States
                    </h4>
                  </div> -->
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/quintet-with-mayor.jpg" alt="Third slide">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                    </h4>
                  </div> -->
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  
  <section id="calendar" class="about p-0">
    <div class="container justify-content-center p-0 ">
      <div class="row">
        <div class="bg-danger col-lg-12 icon-boxes d-flex align-items-stretch justify-content-center py-3 px-0">
          <h3 class="m-0">Calendar</h3>
        </div>
      </div>
      <div class="container my-4">
        <div class="row">
          <div class="col-lg-12 border-danger mb-4">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=America%2FPhoenix&bgcolor=%23f84434&showTabs=0&showTitle=0&src=YmFmZWYyMDNjNzdhYjQ1M2IyZmE1NmIxZjI5MWYwOTU5NDMxNDk4OGE5OTNiOGY2ZGM4YThjM2EzZWZjYTVjZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F4511E" style="height: 60vh; width: 100%;" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">    
    <!-- ======= About Section ======= -->
    <section id="about" class="about p-0">
      <div class="container justify-content-center p-0 ">
        <div class="row">
          <div class="bg-danger col-lg-12 icon-boxes d-flex align-items-stretch justify-content-center py-3 px-0">
            <h3 class="m-0">Private Teachers</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 icon-boxes d-flex align-items-stretch justify-content-center pt-2 px-0 m-0">
            <p class="p-0 m-0">Select instrument to view teachers</p>
          </div>
        </div> 
      </div>
      <?php
        include 'filter.php';
      ?>
      <?php
        if($_SERVER["REQUEST_METHOD"]=="POST" && ($_POST["instruments"] != "")) {
          $filter = $_POST['instruments'];
          if ($filter == 1){
            $query = "SELECT * FROM private_teachers_docx__1_ WHERE Violin = 1";
          }
          if ($filter == 2){
            $query = "SELECT * FROM private_teachers_docx__1_ WHERE Viola = 1";
          }
          if ($filter == 3){
            $query = "SELECT * FROM private_teachers_docx__1_ WHERE Cello = 1";
          }
          if ($filter == 4){
            $query = "SELECT * FROM private_teachers_docx__1_ WHERE Bass = 1";
          }
          if ($filter == 10){
            $query = "SELECT * FROM private_teachers_docx__1_";
          }
          $result = mysqli_query($conn, $query);?>
          <?php
          $counter = 0;
          if ($result) {
            foreach($result as $row) {
              $counter ++;
          ?>
            <div class="row">
              <div class="accordion accordion-flush icon-boxes d-flex flex-column align-items-stretch container-lg" id="accordionFlushExample">
                <div class="accordion-item container-lg">
                  <h2 class="accordion-header container-lg d-flex justify-content-center ">
                    <button class="row accordion-button collapsed justify-content-between container-lg justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo "flush-collapse".$counter;?>" aria-expanded="false" aria-controls="<?php echo "flush-collapse".$counter;?>">
                      <div class="icon col"><i class="bx bx-user"></i><?php echo $row["Name"];?></div>
                      <div class="icon col"><i class="bx bx-location-plus"></i><?php echo $row["Location"];?></div>
                      <div class="icon col"><i class="bx bx-music"></i><?php echo $row["Instrument"];?></div>
                    </button>
                  </h2>
                  <div id="<?php echo 'flush-collapse'.$counter;?>" class="accordion-collapse collapse m-0 p-0" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-grid">
                      <div class="row container-lg d-flex justify-content-evenly">
                        <div class="col icon"><i class="bx bx-phone"></i><?php echo $row["Phone"];?></div>
                        <div class="col icon"><i class="bx bx-mail-send"></i><?php echo $row["EmailWebsite"];?></div>
                        <div class="col icon"><i class="bx bx-notepad"></i><?php echo $row["OtherNotes"];?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <?php
          }
        }
      }
      ?>
    </section><!-- End About Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4">
      <div class="copyright d-flex justify-content-end">
        <div><strong><span>&copy;CHSO 2024</span></strong></div>
        
        <div><strong><span><a href="adminTools.php" class="text-danger mx-3">Admin</a></span></strong></div>
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>