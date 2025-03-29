<?php
include("config.php");

$message = "";
$success = false;

if(isset($_POST["add"])){
    $e = $_POST["nm"];
    $f = $_POST["pass"];
    $qt = "SELECT * FROM userdt WHERE usernmae='$e' AND password='$f'";
    $res = mysqli_query($conc, $qt);

    if(mysqli_num_rows($res) > 0) {
        $message = "Welcome back, <strong>$e</strong>! You have successfully logged in.";
        $success = true;
        header("refresh:3;url=main.html"); 
    } else {
        $message = "Login failed! Please check your username and password and try again.";
        $success = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .message-box {
            max-width: 400px;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1.5s ease-in-out;
        }
        .success {
            background-color: #ffffff;
            color: #28a745;
            border-left: 5px solid #28a745;
        }
        .error {
            background-color: #ffffff;
            color: #dc3545;
            border-left: 5px solid #dc3545;
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <?php if ($message): ?>
            <div class="message-box <?php echo $success ? 'success' : 'error'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <?php if (!$success): ?>
            <a href="log.html" class="btn btn-outline-secondary mt-3">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
