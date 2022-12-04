 <?php
 $servername = "localhost";
 $database = "shop17";
 $username = "root";
 $password = "";

    $con = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
  }
?>