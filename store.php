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

    <section class="py-3 bg-primary">
    <div class="container">
        <div class="row justify-content-center">
        <?php
                $conn = mysqli_connect("localhost", "root", "","wasorder");
                $sql = "SELECT * FROM `business` ORDER BY ID DESC LIMIT 1";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    ?>
            <div class="col-md-6">
                <h1 class="display-1 text-white text-center"><?php echo $row['name']?></h1>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="d-flex">
                        <img src="./assets/img/<?php echo $row['image']?>" class="avatar mr-2">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-white"><?php echo $row['owner']?></li>
                            <li class="text-white text-muted"><?php echo $row['address']?></li>
                        </ul>
                        </div>
                    
                    </div> 
                </div>
            </div>
            <?php

}
} else 
{
echo "no results";  
}
$conn->close();
?>
<!-- connection end -->
            </div>

        </div>
    </div>
    </section>

    <!-- products -->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Menu</h3>
                </div>
            </div>
        <div class="row">
         <!-- connection -->
               
         <?php
                $conn = mysqli_connect("localhost", "root", "","wasorder");
                $sql = "SELECT * FROM menu";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    ?>

        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card mb-3">
                <img src="./assets/img/<?php echo $row['image']?>" class="card-img-top">
                <a href="place_order.php" class="nav-link">
                    <div class="card-body">
                    <h4 class="text-uppercase font-weight-bold"><?php echo $row['name']?></h4>
                    <span class="badge badge-pill badge-info font-weight-bold"><?php echo $row['price']?> FCFA</span>
                </div>
            </a>
            </div>
        </div>  <?php
 }
                } else 
                {
                  echo "no results";  
                }
                $conn->close();
                ?>
                <!-- connection end -->

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

</html>