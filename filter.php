
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
?>

<header id="filter" class="filter container-fluid m-0 p-0"  style="background-color: white;">
  <form action="index.php" method="POST" style="background-color: white;">
    <div class="form-inline justify-content-center m-0" style="background-color: white;">
    <select name="instruments" class="btn-group">
      <option value="" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Select Instrument</option>
      <ul class="dropdown-menu">
      <?php 
        $query = "SELECT * from instruments";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          while($row =  mysqli_fetch_assoc($result)) {
      ?>
      <option value="<?php echo $row["instrument_id"];?>"><a href="#" class="dropdown-item"><?php echo $row["instrument"];?></a></option>
      <?php
          }
        }
      ?>
      </ul>
    </select>
    <button type="submit" class="btn btn-primary m-0">Filter</button>
    <button type="submit" class="btn btn-secondary m-0">Reset</button>
    </div>
  </form>
</header> 