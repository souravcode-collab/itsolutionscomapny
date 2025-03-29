<?php
include("a.php");

$a = $_POST['nm'];
$b = $_POST['pass'];
$c = $_POST['email'];
$d = $_POST['service'];

$all = "INSERT INTO customerdata VALUES('$a', '$b', '$c', '$d')";
$c = mysqli_query($con, $all);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Status</title>
    <style>
        .success-message {
            font-family: Arial, sans-serif;
            color: green;
            font-size: 24px;
            text-align: center;
            margin-top: 50px;
        }

        .success-message svg {
            vertical-align: middle;
            margin-left: 10px;
        }

        .error-message {
            font-family: Arial, sans-serif;
            color: red;
            font-size: 24px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php
    if ($c) {
        echo "<p class='success-message'>Successfully submitted
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='green' viewBox='0 0 16 16'>
                    <path d='M13.485 1.929a1 1 0 0 1 1.415 1.414l-7.01 7.01-3.535-3.535a1 1 0 0 1 1.415-1.415l2.12 2.12 6.01-6.01Z'/>
                </svg>
              </p>";
    } else {
        echo "<p class='error-message'>Not inserted</p>";
    }
    ?>
</body>
</html>
