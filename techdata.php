<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neon Glow SVG Animation</title>
  <style>
    body {
      background-color: #111;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      text-align: center;
      color: white;
    }

    svg {
      display: block;
      margin: 0 auto;
      width: 100px;
      height: 100px;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #39ff14;
      text-shadow: 0 0 10px #39ff14, 0 0 20px #39ff14, 0 0 30px #39ff14;
    }

    p {
      color: #aaa;
      font-size: 1.2rem;
    }

    /* Neon glow effect filter */
    @keyframes neonPulse {
      0% {
        filter: blur(0);
        stroke-width: 2;
      }
      50% {
        filter: blur(5px);
        stroke-width: 4;
      }
      100% {
        filter: blur(0);
        stroke-width: 2;
      }
    }

    svg path {
      stroke: #39ff14;
      stroke-width: 2;
      fill: none;
      animation: neonPulse 1.5s infinite alternate;
      filter: drop-shadow(0 0 5px #39ff14) drop-shadow(0 0 10px #39ff14) drop-shadow(0 0 15px #39ff14);
    }

  </style>
</head>
<body>
  <div class="container">
    <h1>Submission Status</h1>
  
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" viewBox="0 0 16 16">
      <path d="M13.485 1.929a1 1 0 0 1 1.415 1.414l-7.01 7.01-3.535-3.535a1 1 0 0 1 1.415-1.415l2.12 2.12 6.01-6.01Z"/>
    </svg>
  </div>

  <?php
   include("config3.php");

   $a = $_POST['srvc'];
   $b = $_POST['sgst'];
   $c = $_POST['tm'];
   $d = $_POST['nmbr'];
   $e = $_POST['eml'];
   
   
   $all = "INSERT INTO servicetbl VALUES('$a', '$b', '$c', '$d','$e')";
   $cn = mysqli_query($con, $all);
   if ($cn) {
    // echo "<p class='success-message'>;
   
          
} else {
    echo "<p class='error-message'>Not inserted</p>";
}
  ?>
</body>
</html>
