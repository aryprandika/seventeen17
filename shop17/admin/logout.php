<?php 
// Menghapus session yang telah dibuat
session_start();
session_unset();
session_destroy();
header('location: index1.php');

?>