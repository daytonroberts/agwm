<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

$server = "localhost";
$db = "test";
$username = 'root';
$password = "";
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection Failed".mysqli_connect_errors());
}


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $n_id =$_POST["teacher_id"];
    $n_Name =$_POST["Name"];
    $n_Phone=$_POST["Phone"];
    $n_Email=$_POST["EmailWebsite"];
    $n_loc=$_POST["Location"];
    $n_inst=$_POST["Instrument"];
    $n_notes=$_POST["OtherNotes"];
    $n_vn=$_POST["Violin"];
    $n_v=$_POST["Viola"];
    $n_c=$_POST["Cello"];
    $n_b=$_POST["Bass"];
    $query ="UPDATE private_teachers_docx__1_ p SET 
        p.Name='$n_Name', 
        p.Phone='$n_Phone',
        p.EmailWebsite='$n_Email',
        p.Location='$n_loc',
        p.Instrument='$n_inst',
        p.OtherNotes='$n_notes',
        p.Violin='$n_vn',
        p.Viola='$n_v',
        p.Cello='$n_c',
        p.Bass='$n_b' WHERE teacher_id='$n_id'";
    $exe = mysqli_query($conn, $query);
}
else{
    $msg= "You need to change the value to make an update"; 
}
if(isset($exe)){
    $msg= "The update was successfull"; 
    echo "<script>alert('$msg');</script>"; 
    echo "<script>window.location.href = 'editPTtable.php'</script>";   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Full Stack Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/course_logo.png" rel="icon">
  <link href="assets/img/course_logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/external_css.css" rel="stylesheet">
</head>

<body>
    <header>
    <?php 
/* if(isset($msg)){
    echo "<span style='font_color: green;'> $msg </span>"; 
    echo "<a href='index.php'> Home page </a>";
} */
if(isset($_REQUEST['eid'])){
    $id = $_GET['eid'];
    $query = "SELECT * FROM private_teachers_docx__1_ WHERE teacher_id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        foreach($result as $row) {    
    
?>
    <form action="edit.php" method="POST" >
        <div class="form-inline">
        <p><span>Name:</span>
            <input type="text" name="Name" value="<?php echo $row["Name"];?>"><br>

            <span>Phone:</span>              
            <input type="text"  value="<?php echo $row["Phone"];?>" name='Phone'><br>

            <span>EmailWebsite:</span>              
            <input type="text"  value="<?php echo $row["EmailWebsite"];?>" name='EmailWebsite'><br>

            <span>Instrument:</span>
            <input type="text" name="Instrument" value="<?php echo $row["Instrument"];?>"><br>

            <span>Location:</span>              
            <input type="text"  value="<?php echo $row["Location"];?>" name='Location'><br>

            <span>OtherNotes:</span>              
            <input type="text"  value="<?php echo $row["OtherNotes"];?>" name='OtherNotes'><br>

            <span>Put 1 if the instrument is taught, 0 if not</span><br>

            <span>Violin (Only Enter 1 or 0):</span>
            <input type="text" name="Violin" value="<?php echo $row["Violin"];?>"><br>

            <span>Viola (Only Enter 1 or 0):</span>              
            <input type="text"  value="<?php echo $row["Viola"];?>" name='Viola'><br>

            <span>Cello (Only Enter 1 or 0):</span>              
            <input type="text"  value="<?php echo $row["Cello"];?>" name='Cello'><br>

            <span>Bass (Only Enter 1 or 0):</span>              
            <input type="text"  value="<?php echo $row["Bass"];?>" name='Bass'><br>

            <input type="hidden"  value="<?php echo $id;?>" name='teacher_id'>
            <button type="submit" class="btn-primary">Update</button>
            </div>
            </form>
            <?php    
                }
            }
        }
        ?>
        <p>
    </header>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>