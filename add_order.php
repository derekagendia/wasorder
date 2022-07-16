<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "wasorder";

$conn = mysqli_connect ($server , $username , $password ,  $dbname) ;

if(isset($_POST['submit'])) {

        $meal = $_POST['meal'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $total = $_POST['total'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];


     $query = "insert into send(meal,price,qty,total,name,address,phone,date) values('$meal','$price','$qty','$total','$name','$address','$phone','$date')";
      $run = mysqli_query($conn,$query);

    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Prisky delice CRM
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
       
        
    </div>
    </div>
    </nav>

<section class="py">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-6">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center">Order Registered submited</h3>
          <p class="text-center">send your order</p>
          <p class="text-center"><a href="whatsapp.php" class="btn btn-primary">proceed</a></p>

        </div>
      </div>
    </div>
  </div>
</div>
</section>

    <!--   Core   -->
 <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</htm