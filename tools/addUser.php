<?php

$server = "localhost";
$db = "test";
$username = 'root';
$password = "";
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST["password"];

    // Ensure to use prepared statements to prevent SQL injection
    $query = "INSERT INTO users (Usernames, Passwords) VALUES ('$input_username', '$input_password')";
}
mysqli_close($conn);
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
<body class="p-5">
    
    <div class="container-lg d-flex flex-column justify-content-center">
        <h2>CHSO Add User Page</h2>
        <a href="../index.php">Return to Main</a>
        <a href="../adminTools.php">Return to Tools</a>
    </div>
    <header id="filter" class="filter container-fluid m-0 p-0"  style="background-color: white;">
        <form action="addUser.php" method="POST" style="background-color: white;">
        
            <div class="form-inline justify-content-center m-0" style="background-color: white;">
            <span>Enter New User's Username and Password:</span><br>
                <input type="text" name="username" class="form-control p-1 ms-4" placeholder="Username">
                <input type="password" name="password" class="form-control p-1" placeholder="Password">
                <input type="submit" value="Submit" class="btn btn-danger">
            </div>
        </form>
    </header>
</body>
</html>
