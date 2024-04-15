<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST['username'];
        $password = $_POST["password"];
        
        $host = "localhost";
        $dbusername ="root";
        $dbpassword = "";
        $dbname = "test";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if ($conn -> connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }

        $query = "SELECT * FROM users WHERE Passwords='$password' AND Usernames = '$username'";

        $result = $conn->query($query);

        if ($result->num_rows >= 1) {
            $newquery = "SELECT * FROM private_teachers_docx__1_";
            $newresult = mysqli_query($conn, $newquery);
            $counter = 0;
            if ($newresult) {
                foreach($newresult as $row) {
            $counter ++;
            ?>
            <div class="container-lg p-5">
                <div class="row">
                        <div class="col"><?php echo $row["Name"];?></div>
                        <div class="col"><?php echo $row["Location"];?></div>
                        <div class="col"><?php echo $row["Instrument"];?></div>
                        <div class="col"><?php echo $row["Phone"];?></div>
                        <div class="col"><?php echo $row["Email/Website"];?></div>
                        <div class="col"><?php echo $row["Other Notes"];?></div>
                </div>
            </div>
            
            <?php
                    }
                }
            }
        
        else {?>
            <div class="container-lg">
                <p class="text-danger">incorrect credentials</p>
            </div>
        <?php
        } 
    }
?>