<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   Ordering system
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
                $conn = mysqli_connect("localhost", "root", "","wasorder");
                $sql = "SELECT * FROM send ORDER BY ID DESC LIMIT 1";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result-> fetch_assoc()) {
                    ?>
           <div class="card  mt-5">
            <div class="card-body">
            <h4 class="font-weight-bolder text-center">send your order through</h4>
                <p class="text-center"> <a href="https://wa.me/237680729619?text=Hello%20i'm%20<?php echo $row['name']; ?>%20i%20like%20to%20have%20<?php echo $row['qty']; ?>%20servings%20of%20<?php echo $row['meal']; ?>%20which%20will%20cost%20a%20total%20of<?php echo $row['total']; ?>FR.%20I%20want%20delivered%20at%20<?php echo $row['address']; ?>%20How%20should%20i%20pay" class="btn btn-success"> WhatsApp</a></a></p>
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
</div>
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