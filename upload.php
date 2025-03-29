<?php
include("config.php");
if(isset($_POST["add"])){
    $e = $_POST["nm"];
    $f = $_POST["pass"];
    $qt = "INSERT INTO userdt VALUES ('$e', '$f')";
    $res = mysqli_query($conc, $qt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .message {
            font-size: 20px;
            font-weight: bold;
            color: #28a745;
            opacity: 0;
            animation: fadeIn 1.5s forwards;
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <?php if ($res): ?>
            <p class="message">✅ Name and Password Inserted Successfully!</p>
            <a href="log.html" class="btn btn-primary mt-3">Go to Login</a>
        <?php else: ?>
            <p class="message text-danger">❌ Error: Value Not Inserted.</p>
            <a href="signup.html" class="btn btn-danger mt-3">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
