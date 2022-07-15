
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

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center font-weight-bold mb-3">Last step</h3>

            <?php
                $conn = mysqli_connect("localhost", "root", "","prisky");
                $sql = "SELECT * FROM send ORDER BY ID DESC LIMIT 1";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    ?>
           
            <p class="text-center"><a href="https://wa.me/237680729619?text=Hello%20i'm%20<?php echo $row['name']; ?>%20i%20like%20to%20have%20<?php echo $row['qty']; ?>%20servings%20of%20<?php echo $row['meal']; ?>%20which%20will%20cost%20a%20total%20of<?php echo $row['total']; ?>FR.%20I%20want%20delivered%20at%20<?php echo $row['address']; ?>%20How%20should%20i%20pay" class="btn btn-success" class="btn btn-success">Send through WhatsApp</a>
                  </p>
                  
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
