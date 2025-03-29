<?php
$localhost = "localhost";  
$user = "root";
$password = "";
$db = "userdata";

$conc = mysqli_connect($localhost, $user, $password, $db);

if ($conc) {
    // echo "done";
} else {
    echo "not done";
}
?>
