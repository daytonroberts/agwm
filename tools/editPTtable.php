<?php

ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setcookie('loggedin', false);
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
// $admin = false;

// if(isset($_COOKIE["loggedin"]) && $_COOKIE['loggedin'] == true) {
//   $admin = true;
//   setcookie('loggedin', true, time() + 3600);
// }

// if($_SERVER["REQUEST_METHOD"]=="POST") {
//   $input_username = $_POST['username'];
//   $input_password = $_POST["password"];

//   $query = "SELECT * FROM users WHERE Passwords='$input_password' AND Usernames = '$input_username'";

//   $result = $conn->query($query);

//   if ($result->num_rows > 0) {
//     $admin = true;
//     setcookie('loggedin', true, time() + 3600);
//   } else {
//     $admin = false;
//   }
// }

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
  $sql = mysqli_query($conn, "DELETE FROM private_teachers_docx__1_ WHERE teacher_id = '$delid'");
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

<body class="p-2">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

  <section class="mt-5 mx-5">
    <div class="container-lg d-flex flex-column justify-content-center">
        <h2>CHSO Admin Page</h2>
        <a href="../index.php">Return to Main</a>
        <a href="../adminTools.php">Return to Tools</a>
    </div>

    
  </section>
  <?php
      $newquery = "SELECT * FROM private_teachers_docx__1_";
      $newresult = mysqli_query($conn, $newquery);
      $counter = 0;
      if ($newresult) {?>
      <div class="container-lg p-5">
        <div class="row">
          <div class="col"><p>Name</p></div>
          <div class="col"><p>Location</p></div>
          <div class="col"><p>Instrument</p></div>
          <div class="col"><p>Phone</p></div>
          <div class="col"><p>EmailWebsite</p></div>
          <div class="col"><p>OtherNotes</p></div>
          <div class="col"><p>Actions</p></div>
        </div>
      </div>
        <?php
        foreach($newresult as $row) {
          $counter ++;
          ?>
          <div class="container-lg p-5">
            <div class="row">
              <div class="col"><?php echo $row["Name"];?></div>
              <div class="col"><?php echo $row["Location"];?></div>
              <div class="col"><?php echo $row["Instrument"];?></div>
              <div class="col"><?php echo $row["Phone"];?></div>
              <div class="col"><?php echo $row["EmailWebsite"];?></div>
              <div class="col"><?php echo $row["OtherNotes"];?></div>
              <p><a href="edit.php?eid=<?php echo ($row['teacher_id']);?>">Edit</a></p>
              <p class="mx-1"><a href="?delid=<?php echo $row['teacher_id'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete?')"> Delete </a></p>
            </div>
          </div>
        <?php
        }
      }?>

</body>
</html>